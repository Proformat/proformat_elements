<?php

$post_type     = (string) ($propertiesData['content']['post_table']['post_type'] ?? 'post');
$posts_per_page = (int) ($propertiesData['content']['post_table']['posts_number'] ?? -1);
$show_id = (bool) ($propertiesData['content']['post_table']['show_id_column'] ?? true);
$show_actions = (bool) ($propertiesData['content']['post_table']['show_actions'] ?? false);

$action_buttons = $propertiesData['content']['post_table']['action_buttons'];

$columns = $propertiesData['content']['post_table']['table_columns'];
$order = $propertiesData['content']['post_table']['order'] ?? 'ASC';

$args = [
    'post_type' => $post_type,
    'posts_per_page' => $posts_per_page,
    'order' => $order 
];

/* Order by */
$order_by = $propertiesData['content']['post_table']['order_by'];
$value_type = $propertiesData['content']['post_table']['value_type'];


if (preg_match("/{.*}/", $order_by)) {
    $property = substr(trim($order_by), 1, -1);
    $args['orderby'] = $property;
} elseif (str_contains(trim($order_by), 'mb')) {
    $meta_key = trim($order_by, 'mb:');
    $args['orderby'] = $value_type ?? 'meta_value';
    $args['meta_key'] = $meta_key;
} elseif (str_contains(trim($order_by), 'acf')) {
    $meta_key = trim($order_by, 'acf:');
    $args['orderby'] = $value_type ?? 'meta_value';
    $args['meta_key'] = $meta_key;
} else {
    $args['orderby'] = 'date';
}

/* End order by */


$wp_query = new WP_Query($args);
?>
<table id="myTable" class="display">
    <thead>

        <tr>
            <?php if ($show_id) : ?>
                <th class="id-column">Lp.</th>
            <?php endif; ?>
            <?php foreach ($columns as $column) : ?>
                <th width="<?= $column['width']['style'] ?>"><?= $column['display'] ?></th>
            <?php endforeach; ?>
            <?php if ($show_actions) : ?>
                <th>Actions</th>
            <?php endif; ?>

        </tr>
    </thead>
    <tbody>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <tr>
                <?php if ($show_id) : ?>
                    <td><?= $wp_query->current_post + 1; ?></td>
                <?php endif; ?>

                <?php foreach ($columns as $column) : ?>
                    <?php $post = get_post(get_the_ID(), ARRAY_A) ?>
                    <?php if (preg_match("/{.*}/", $column['property'])) : ?>
                        <?php $property = substr(trim($column['property']), 1, -1) ?>
                        <td><?= $post[$property] ?></td>
                    <?php elseif (str_contains(trim($column['property']), 'mb')) : ?>
                        <td><?= rwmb_get_value(trim($column['property'], 'mb:')) ?></td>
                    <?php elseif (str_contains(trim($column['property']), 'mb')) : ?>
                        <td><?= get_field(trim($column['property'], 'acf:')) ?></td>
                    <?php else : ?>
                        <td></td>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php if ($show_actions) : ?>
                    <td>
                        <?php foreach($action_buttons as $button) : ?>
                            <?php 
                            $action = $button['action_name'] != '' ? '?action=' . $button['action_name'] : '';
                            $class = $action ? 'table_button--' . $button['action_name'] : 'table_button--edit';      
                            ?>
                            <a href="<?= get_permalink() . $action ?>" class="<?= $class ?>"><?= $button['display_name']?></a>
                        <?php endforeach; ?>
                    </td>
                <?php endif; ?>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>