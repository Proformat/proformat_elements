<?php

$post_type     = (string) ($propertiesData['content']['post_table']['post_type'] ?? 'post');
$posts_per_page = (int) ($propertiesData['content']['post_table']['posts_number'] ?? -1);
$show_id = (bool) ($propertiesData['content']['post_table']['show_id_column'] ?? true);
$show_actions = (bool) ($propertiesData['content']['post_table']['show_actions'] ?? false);

$delete_button = in_array('delete', $propertiesData['content']['post_table']['action_buttons']);
$edit_button = in_array('edit', $propertiesData['content']['post_table']['action_buttons']);
fdump($propertiesData['design']);
$view_button = in_array('view', $propertiesData['content']['post_table']['action_buttons']);
$columns = $propertiesData['content']['post_table']['table_columns'];

$wp_query = new WP_Query(array(
    'post_type' => $post_type,
    'posts_per_page' => $posts_per_page
));
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
                        <?php if ($delete_button) : ?>
                            <button>Delete</button>
                        <?php endif; ?>
                        <?php if ($edit_button) : ?>
                            <button>Edit</button>
                        <?php endif; ?>
                        <?php if ($view_button) : ?>
                            <button>View</button>
                        <?php endif; ?>

                    </td>
                <?php endif; ?>

            </tr>
        <?php endwhile; ?>
    </tbody>
</table>