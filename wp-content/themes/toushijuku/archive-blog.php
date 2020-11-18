<?php
/**
 * The template for displaying archive-blog pages.
 *
 * @see https://codex.wordpress.org/Template_Hierarchy
 */
get_header(); ?>

<div class="archive l-archive">

    <main class="l-archive-main">
      <div class="l-container">
        <div class="archive-record l-archive-record">
          <?php while (have_posts()) : the_post(); ?>
            <?php import_part( 'record', array(
              'modifier'    => '',
              'link'        => get_permalink(),
              'image'       => get_eyecatch_data(get_the_ID(), 'full', ''),
              'categories'  => get_the_terms(get_the_ID(), BLOG_POST_TYPE_CATEGORY),
              'title'       => string_limit(get_the_title(), 70),
              'text'        => string_limit(get_first_paragraph(), 80),
              'tags'        => get_the_terms(get_the_ID(), BLOG_POST_TYPE_TAG)
            ) ); ?>
          <?php endwhile; ?>

        </div>
      </div>

      <div class="l-archive-talk">
        <?php import_part( 'talk'); ?>
      </div>
      
    </main>
</div>

<?php
get_footer();
