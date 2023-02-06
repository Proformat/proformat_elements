<?php 

$post_type     = (string) ($propertiesData['content']['table']['post_type'] ?? 'post');
$posts_per_page = (int) ($propertiesData['content']['table']['posts_number'] ?? -1);
$columns = $propertiesData['content']['table']['columns'];

// echo '<pre>';
// var_dump($columns);
// echo '</pre>';
$wp_query = new WP_Query(array(
    'post_type' => $post_type,
    'posts_per_page' => $posts_per_page
));

?>

<table id="myTable" class="display">
    <thead>
        
        <tr>
            <th>Lp.</th>
            <?php foreach($columns as $column) : ?>
                <th><?= $column['display'] ?></th>
            <?php endforeach; ?>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <tr>
                <td><?= $wp_query->current_post + 1; ?></td>
                <?php foreach($columns as $column) : ?>
                    <?php $post = get_post(get_the_ID(), ARRAY_A) ?>
                    <?php if(preg_match("/{.*}/", $column['property'])) : ?>
                        <?php $property = substr(trim($column['property']), 1, -1) ?>
                        <td><?= $post[$property] ?></td>
                    <?php else : ?>
                        <td><?= rwmb_get_value(trim($column['property'])) ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>
                <td><button>View</button> <button>Delete</button></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>