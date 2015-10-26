<?php
//BLOG
$blogImages = array(
	'full'  => array(
		'alt' => 'Full width - no container',
		'img' => FRAMEWORK_URI . '/config/sidebars/full.jpg'
	),
	'right' => array(
		'alt' => 'Right sidebar',
		'img' => FRAMEWORK_URI . '/config/sidebars/right.jpg'
	),
	'left'  => array(
		'alt' => 'Left sidebar',
		'img' => FRAMEWORK_URI . '/config/sidebars/left.jpg'
	)
);
Redux::setSection( $opt_name, array(
	'title'  => 'Blog',
	'icon'   => 'fa fa-cog',
	'fields' => array(
		array(
			'id'       => 'blog-section-start',
			'type'     => 'section',
			'subtitle' => esc_html__( 'From this section you can manage the overall appearance of your Blog.', 'webuild' ),
			'indent'   => true
		),
		array(
			'id'       => 'blog_layout',
			'type'     => 'select',
			'title'    => esc_html__( 'Blog Layout', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to set the default layout for your blog.', 'webuild' ),
			'options'  => array(
				'default' => 'Blog Large Image',
				'medium'  => 'Blog Medium Image',
				'small'   => 'Blog Small Image',
				'masonry' => 'Blog Masonry',
				'grid'    => 'Blog Grid'
			),
			'default'  => 'medium'
		),
		array(
			'id'       => 'blog_column',
			'type'     => 'select',
			'title'    => esc_html__( 'Blog Columns', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can set the default columns for your blog.', 'webuild' ),
			'options'  => array(
				2 => '2 Columns',
				3 => '3 Columns',
				4 => '4 Columns',
				6 => '6 Columns'
			),
			'default'  => 2,
			'required' => array(
				array(
					'blog_layout',
					'not',
					'default'
				),
				array(
					'blog_layout',
					'not',
					'medium'
				),
				array(
					'blog_layout',
					'not',
					'small'
				)
			)
		),
		array(
			'id'       => 'blog_sidebar',
			'type'     => 'image_select',
			'title'    => esc_html__( 'Blog Sidebar', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to set the default position for your blog’s sidebar.', 'webuild' ),
			'default'  => 'full',
			'options'  => $blogImages
		),
		array(
			'id'       => 'sidebar-id',
			'title'    => esc_html__( 'Select Sidebar', 'webuild' ),
			'subtitle' => '',
			'type'     => 'select',
			'subtitle' => esc_html__( 'This option allows you to set the default position for your blog’s sidebar.', 'webuild' ),
			'data'     => 'sidebars',
			'default'  => 'None'
		),
		array(
			'id'             => 'blog_widget',
			'type'           => 'select',
			'title'          => esc_html__( 'Blog Sidebar Widget', 'webuild' ),
			'data'           => 'sidebars',
			'default_option' => 'Select a sidebar (default primary)',
			'required'       => array(
				'blog_sidebar',
				'contains',
				'right left'
			)
		),
		array(
			'id'       => 'blog_image_size',
			'type'     => 'select',
			'title'    => esc_html__( 'Blog Featured Image Size', 'webuild' ),
			'options'  => webuild_get_image_sizes( true, false ),
			'subtitle' => esc_html__( 'This option allows you to set the default blog featured image size. The default value is medium.', 'webuild' ),
			'default'  => 'blog-small'
		),
		array(
			'id'       => 'blog_pagination',
			'type'     => 'select',
			'title'    => esc_html__( 'Blog Pagination', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can set the default pagination style, eg: pagination or load more.', 'webuild' ),
			'options'  => array(
				'pagination' => 'Pagination (default)',
				'load'       => 'Load More',
				'hide'       => 'Hide'
			),
			'default'  => 'load'
		),
		array(
			'id'       => 'excerpt-length',
			'type'     => 'text',
			'title'    => esc_html__( 'Excerpt Length', 'webuild' ),
			'subtitle' => esc_html__( 'This option enables you to choose how many words the excerpt should have: eg:77', 'webuild' ),
			'validate' => 'numeric',
			'default'  => '35'
		),
		array(
			'id'       => 'blog-read-more-color',
			'type'     => 'link_color',
			'title'    => esc_html__( 'Read more buttons', 'webuild' ),
			'subtitle' => esc_html__( 'This option will change the read more button colors.', 'webuild' ),
			'active'   => false,
			'visited'  => false,
			'default'  => array(
				'regular' => '#2c3e50',
				'hover'   => '#2c3e50'
			),
			'compiler' => true
		),
		array(
			'id'     => 'blog-section-end',
			'type'   => 'section',
			'indent' => false
		),
	)
) );
Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Blog post', 'webuild' ),
	'subtitle'   => esc_html__( ' ', 'webuild' ),
	'subsection' => true,
	'icon'       => 'fa fa-gears',
	'fields'     => array(
		array(
			'id'     => 'blog-single-section-start',
			'type'   => 'section',
			'indent' => true
		),
		array(
			'id'       => 'single-layout',
			'title'    => esc_html__( 'Layout on single post page', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to set the layout on single post page.', 'webuild' ),
			'default'  => 'right',
			'type'     => 'image_select',
			'options'  => $blogImages
		),
		array(
			'id'       => 'single-sidebar-right',
			'title'    => esc_html__( 'Sidebar right', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to set the sidebar that is displayed on the right of the single post page.', 'webuild' ),
			'type'     => 'select',
			'data'     => 'sidebars',
		),
		array(
			'id'       => 'single-sidebar-left',
			'title'    => esc_html__( 'Sidebar left', 'webuild' ),
			'subtitle' => esc_html__( 'This allows you to set the sidebar that is displayed on the left of the single post page.', 'webuild' ),
			'type'     => 'select',
			'data'     => 'sidebars'
		),
		array(
			'id'       => 'blog_featured_image',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show Featured Image in Blog Single', 'webuild' ),
			'subtitle' => esc_html__( 'This option shows the “featured image” on the single post page', 'webuild' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_recent_posts',
			'type'     => 'switch',
			'title'    => esc_html__( 'Recent posts', 'webuild' ),
			'subtitle' => esc_html__( 'This option enables you to show or hide the “recent posts” on the post page', 'webuild' ),
			'default'  => true
		),
		array(
			'id'       => 'single_recents',
			'type'     => 'select',
			'title'    => esc_html__( 'Single Recent Posts', 'webuild' ),
			'subtitle' => esc_html__( 'This option allows you to choose what you wish to show on the single post page', 'webuild' ),
			'options'  => array(
				'recent'    => 'Recent Posts',
				'related'   => 'Related Posts',
				'random'    => 'Random Posts',
				'commented' => 'Most Commented Posts'
			),
			'default'  => 'recent',
			'required' => array(
				'blog_recent_posts',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'single_recents_title',
			'type'     => 'text',
			'title'    => esc_html__( 'Single Recent Title', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can select the title of the section, in case you have set the “Recent Posts” ON.', 'webuild' ),
			'required' => array(
				'blog_recent_posts',
				'equals',
				'1'
			),
			'default'  => ''
		),
		array(
			'id'       => 'related_posts_number',
			'type'     => 'text',
			'title'    => esc_html__( 'Maximum number of related post', 'webuild' ),
			'subtitle' => esc_html__( 'From here you can select the number of related posts that you wish to show on the post page. Default value is 6 posts.', 'webuild' ),
			'validate' => 'number',
			'msg'      => esc_html__( 'Please enter a number', 'webuild' ),
			'default'  => '6',
			'required' => array(
				'blog_recent_posts',
				'equals',
				'1'
			)
		),
		array(
			'id'       => 'blog_author_info',
			'type'     => 'switch',
			'title'    => esc_html__( 'About author', 'webuild' ),
			'subtitle' => esc_html__( 'When this option is enabled, it will display the author of the post information.', 'webuild' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_single_nav',
			'type'     => 'switch',
			'title'    => esc_html__( 'Post navigation', 'webuild' ),
			'subtitle' => esc_html__( 'When this option is enabled, it will show the post navigation.', 'webuild' ),
			'default'  => true
		),
		array(
			'id'       => 'blog_comments',
			'type'     => 'switch',
			'title'    => esc_html__( 'Show Comments in Blog Single', 'webuild' ),
			'subtitle' => esc_html__( 'When this option is enabled, it will show the comments.', 'webuild' ),
			'default'  => true
		),
	)
) );
?>