<?php
/**
 * Portfolio shortcodes VC bridge.
 *
 * @package the7\Portfolio\Shortcodes
 * @since 3.0.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }

// templates
$loading_effect = array(
	"group"         => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Loading effect", 'dt-the7-core' ),
	"param_name"	=> "loading_effect",
	"type"			=> "dropdown",
	"value"			=> array(
		'None'				=> 'none',
		'Fade in'			=> 'fade_in',
		'Move up'			=> 'move_up',
		'Scale up'			=> 'scale_up',
		'Fall perspective'	=> 'fall_perspective',
		'Fly'				=> 'fly',
		'Flip'				=> 'flip',
		'Helix'				=> 'helix',
		'Scale'				=> 'scale',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$show_title = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"param_name"	=> "show_title",
	"type"			=> "checkbox",
	"value"			=> array( "Show projects titles" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$show_excerpt = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"param_name"	=> "show_excerpt",
	"type"			=> "checkbox",
	"value"			=> array( "Show projects excerpts" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$show_categories = array(
	"group" => __( "Project Meta", 'dt-the7-core' ),
	"param_name"	=> "show_categories",
	"type"			=> "checkbox",
	"value"			=> array( "Show project categories" => "true" ),
);

$show_date = array(
	"group" => __( "Project Meta", 'dt-the7-core' ),
	"param_name"	=> "show_date",
	"type"			=> "checkbox",
	"value"			=> array( "Show project date" => "true" ),
);

$show_author = array(
	"group" => __( "Project Meta", 'dt-the7-core' ),
	"param_name"	=> "show_author",
	"type"			=> "checkbox",
	"value"			=> array( "Show project author" => "true" ),
);

$show_comments = array(
	"group" => __( "Project Meta", 'dt-the7-core' ),
	"param_name"	=> "show_comments",
	"type"			=> "checkbox",
	"value"			=> array( "Show project comments" => "true" ),
);

$show_filter = array(
	"param_name"	=> "show_filter",
	"type"			=> "checkbox",
	"value"			=> array( "Show categories filter" => "true" ),
);

$show_orderby = array(
	"param_name"	=> "show_orderby",
	"type"			=> "checkbox",
	"value"			=> array( "Show name / date ordering" => "true" ),
);

$show_order = array(
	"param_name"	=> "show_order",
	"type"			=> "checkbox",
	"value"			=> array( "Show asc. / desc. ordering" => "true" ),
);

$show_details = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"param_name"	=> "show_details",
	"type"			=> "checkbox",
	"value"			=> array( "Details icon on hover" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$show_link = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"param_name"	=> "show_link",
	"type"			=> "checkbox",
	"value"			=> array( "Link icon on hover" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$show_zoom = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"param_name"	=> "show_zoom",
	"type"			=> "checkbox",
	"value"			=> array( "Zoom icon on hover" => "true" ),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$number = array(
	"heading"		=> __( "Number of projects to show", 'dt-the7-core' ),
	"param_name"	=> "number",
	"type"			=> "textfield",
	"value"			=> "12",
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$posts_per_page = array(
	"heading"		=> __( "Projects per page", 'dt-the7-core' ),
	"param_name"	=> "posts_per_page",
	"type"			=> "textfield",
	"value"			=> "-1",
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$orderby = array(
	"heading"		=> __( "Order by", 'dt-the7-core' ),
	"description"	=> __( "Select how to sort retrieved posts.", 'dt-the7-core' ),
	"param_name"	=> "orderby",
	"type"			=> "dropdown",
	"value"			=> array(
		"Date"			=> "date",
		"Author"		=> "author",
		"Title"			=> "title",
		"Slug"			=> "name",
		"Date modified"	=> "modified",
		"ID"			=> "id",
		"Random"		=> "rand",
	),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$order = array(
	"heading"		=> __( "Order way", 'dt-the7-core' ),
	"description"	=> __( "Designates the ascending or descending order.", 'dt-the7-core' ),
	"param_name"	=> "order",
	"type"			=> "dropdown",
	"value"			=> array(
		"Descending"	=> "desc",
		"Ascending"		=> "asc",
	),
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$category = array(
	"heading"		=> __( "Categories", 'dt-the7-core' ),
	"param_name"	=> "category",
	"type"			=> "dt_taxonomy",
	"taxonomy"		=> "dt_portfolio_category",
	"admin_label"	=> true,
	"description"	=> __( "Note: By default, all your projects will be displayed. <br>If you want to narrow output, select category(s) above. Only selected categories will be displayed.", 'dt-the7-core' ),
);

$padding = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Gap between images (px)", 'dt-the7-core' ),
	"param_name"	=> "padding",
	"type"			=> "textfield",
	"value"			=> "20",
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$proportion = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Thumbnails proportions", 'dt-the7-core' ),
	"description"	=> __( "Width:height (e.g. 16:9). Leave this field empty to preserve original image proportions.", 'dt-the7-core' ),
	"param_name"	=> "proportion",
	"type"			=> "textfield",
	"value"			=> "",
	"edit_field_class" => "vc_col-sm-6 vc_column",
);

$descriptions = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Show projects descriptions", 'dt-the7-core' ),
	"param_name"	=> "descriptions",
	"type"			=> "dropdown",
	"value"			=> array(
		'Under images'							=> 'under_image',
		'On colored background'					=> 'on_hover_centered',
		'On dark gradient'						=> 'on_dark_gradient',
		'In the bottom'							=> 'from_bottom',
		'Background & animated lines'			=> 'bg_with_lines',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$bg_under_projects = array(
	
	"heading"		=> __( "Background under projects", 'dt-the7-core' ),
	"param_name"	=> "bg_under_projects",
	"type"			=> "dropdown",
	"value"			=> array(
		'Enabled (image with paddings)'		=> 'with_paddings',
		'Enabled (image without paddings)'	=> 'fullwidth',
		'Disabled'							=> 'disabled',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
	"group" => __( "Appearance", 'dt-the7-core' ),
);

$hover_animation = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Animation", 'dt-the7-core' ),
	"param_name"	=> "hover_animation",
	"type"			=> "dropdown",
	"value"			=> array(
		'Fade'						=> 'fade',
		'Direction aware'			=> 'direction_aware',
		'Reverse direction aware'	=> 'redirection_aware',
		'Scale in'					=> 'scale_in',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$hover_bg_color = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Image hover background color", 'dt-the7-core' ),
	"param_name"	=> "hover_bg_color",
	"type"			=> "dropdown",
	"value"			=> array(
		'Color (from Theme Options)'	=> 'accent',
		'Dark'							=> 'dark',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$bgwl_animation_effect = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Animation effect", 'dt-the7-core' ),
	"param_name"	=> "bgwl_animation_effect",
	"type"			=> "dropdown",
	"value"			=> array(
		'Effect 1'	=> '1',
		'Effect 2'	=> '2',
		'Effect 3'	=> '3',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$hover_content_visibility = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Content", 'dt-the7-core' ),
	"param_name"	=> "hover_content_visibility",
	"type"			=> "dropdown",
	"value"			=> array(
		'On hover'			=> 'on_hover',
		'Always visible'	=> 'always'
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$colored_bg_content_aligment = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Content alignment", 'dt-the7-core' ),
	"param_name"	=> "colored_bg_content_aligment",
	"type"			=> "dropdown",
	"value"			=> array(
		"Centre"		=> "centre",
		"Bottom"		=> "bottom",
		"Left & top"	=> "left_top",
		"Left & bottom"	=> "left_bottom",
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$content_aligment = array(
	"group" => __( "Appearance", 'dt-the7-core' ),
	"heading"		=> __( "Content alignment", 'dt-the7-core' ),
	"param_name"	=> "content_aligment",
	"type"			=> "dropdown",
	"value"			=> array(
		'Left'			=> 'left',
		'Centre'		=> 'center',
	),
	"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
);

$number_order_title = array(
	"heading" => __( "Projects Number & Order", 'dt-the7-core' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
);

$design_title = array(
	"group" => __("Appearance", 'dt-the7-core'),
	"heading" => __( "Project Design", 'dt-the7-core' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
);

$elements_title = array(
	"group" => __("Appearance", 'dt-the7-core'),
	"heading" => __( "Project Elements", 'dt-the7-core' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
);

$filter_title = array(
	"heading" => __( "Projects Filter", 'dt-the7-core' ),
	"param_name" => "dt_title",
	"type" => "dt_title",
);

/**
 * Portfolio Scroller.
 */

vc_map( array(
	"weight"	=> -1,
	"base"		=> "dt_portfolio_slider",
	"name"		=> __("Portfolio Scroller", 'dt-the7-core'),
	"category"	=> __('by Dream-Theme', 'dt-the7-core'),
	"icon"		=> "dt_vc_ico_portfolio_slider",
	"class"		=> "dt_vc_sc_portfolio_slider",
	"params"	=> array(
		// General group.
		$category,
		$number_order_title,
		array_merge( $number, array( "edit_field_class" => "vc_col-xs-12 vc_column dt_row-6", ) ),
		$orderby,
		$order,
		// Appearance group.
		array_merge( $padding, array( "edit_field_class" => "vc_col-xs-12 vc_column dt_row-6", ) ),
		array(
			"group" => __( "Appearance", 'dt-the7-core' ),
			"heading"		=> __("Thumbnails width", 'dt-the7-core'),
			"param_name"	=> "width",
			"type"			=> "textfield",
			"value"			=> "",
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"description"	=> __("In pixels. Leave this field empty if you want to preserve original thumbnails proportions.", 'dt-the7-core'),
		),
		array(
			"group" => __( "Appearance", 'dt-the7-core' ),
			"heading"		=> __("Thumbnails height", 'dt-the7-core'),
			"param_name"	=> "height",
			"type"			=> "textfield",
			"value"			=> "210",
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"description"	=> __("In pixels.", 'dt-the7-core'),
		),
		array(
			"group" => __( "Appearance", 'dt-the7-core' ),
			"heading"		=> __("Thumbnails max width", 'dt-the7-core'),
			"param_name"	=> "max_width",
			"type"			=> "textfield",
			"value"			=> "",
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
			"description"	=> __("In percents.", 'dt-the7-core'),
		),
		$design_title,
		array_merge( $descriptions, array( "param_name" => "appearance" ) ),
		array_merge( $bg_under_projects, array(
			"dependency"	=> array(
				"element"	=> "appearance",
				"value"		=> array( 'under_image' ),
			),
		) ),
		array_merge( $hover_animation, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $hover_bg_color, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array(
					'on_hover_centered',
					'under_image',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $bgwl_animation_effect, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array( 'bg_with_lines' ),
			),
		) ),
		array_merge( $hover_content_visibility, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array(
					'on_dark_gradient',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $colored_bg_content_aligment, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $content_aligment, array(
			"dependency"	=> array(
				"element"		=> "appearance",
				"value"			=> array(
					'under_image',
					'on_dark_gradient',
					'from_bottom',
				),
			),
		) ),
		$elements_title,
		$show_title,
		$show_link,
		$show_excerpt,
		$show_zoom,
		$show_details,
		// Project Meta group.
		$show_categories,
		$show_date,
		$show_author,
		$show_comments,
		// Slideshow group.
		array(
			"group" => __( "Slideshow", 'dt-the7-core' ),
			"heading"		=> __("Arrows", 'dt-the7-core'),
			"param_name"	=> "arrows",
			"type"			=> "dropdown",
			"value"			=> array(
				'light'					=> 'light',
				'dark'					=> 'dark',
				'rectangular accent'	=> 'rectangular_accent',
				'disabled'				=> 'disabled',
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array(
			"group" => __("Slideshow", 'dt-the7-core'),
			"heading" => __("Show arrows on mobile device", 'dt-the7-core'),
			"param_name" => "arrows_on_mobile",
			"type" => "dropdown",
			"value" => array(
				"Yes" => "on",
				"No" => "off",
			),
			"dependency" => array(
				"element" => "arrows",
				"value" => array(
					'light',
					'dark',
					'rectangular_accent',
				),
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array(
			"group" => __( "Slideshow", 'dt-the7-core' ),
			"heading"		=> __("Autoslide interval (in milliseconds)", 'dt-the7-core'),
			"param_name"	=> "autoslide",
			"type"			=> "textfield",
			"value"			=> "",
			"edit_field_class" => "vc_col-xs-6 vc_column",
		),
		array(
			"group" => __( "Slideshow", 'dt-the7-core' ),
			"heading" => '&nbsp;',
			"param_name"	=> "loop",
			"type"			=> "checkbox",
			"value"			=> array( "Loop" => "true" ),
			"edit_field_class" => "vc_col-xs-6 vc_column",
		),
	)
) );

/**
 * Portfolio.
 */

vc_map( array(
	"weight"	=> -1,
	"base"		=> "dt_portfolio",
	"name"		=> __( "Portfolio Masonry & Grid (old)", 'dt-the7-core' ),
	"category"	=> __( 'by Dream-Theme', 'dt-the7-core' ),
	"icon"		=> "dt_vc_ico_portfolio",
	"class"		=> "dt_vc_sc_portfolio",
	"params"	=> array(
		// General group.
		$category,
		$number_order_title,
		$number,
		$posts_per_page,
		$orderby,
		$order,
		$filter_title,
		$show_filter,
		$show_orderby,
		$show_order,
		// Appearance group.
		array(
			"group"         => __( "Appearance", 'dt-the7-core' ),
			"heading"		=> __( "Appearance", 'dt-the7-core' ),
			"param_name"	=> "type",
			"type"			=> "dropdown",
			"value"			=> array(
				"Masonry"		=> "masonry",
				"Grid"			=> "grid",
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		$loading_effect,
		array(
			"group" => __( "Appearance", 'dt-the7-core' ),
			"heading"		=> __( "Projects width", 'dt-the7-core' ),
			"param_name"	=> "same_width",
			"type"			=> "dropdown",
			"value"			=> array(
				"Preserve original width"	=> "false",
				"Make projects same width"	=> "true",
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array_merge( $padding, array(
			"description"	=> __( "Image paddings (e.g. 5 pixel padding will give you 10 pixel gaps between images)", 'dt-the7-core' ),
		) ),
		$proportion,
		$design_title,
		$descriptions,
		array_merge( $bg_under_projects, array(
			"dependency"	=> array(
				"element"	=> "descriptions",
				"value"		=> array( 'under_image' ),
			),
		) ),
		array_merge( $hover_animation, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $hover_bg_color, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_hover_centered',
					'under_image',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $bgwl_animation_effect, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'bg_with_lines' ),
			),
		) ),
		array_merge( $hover_content_visibility, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_dark_gradient',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $colored_bg_content_aligment, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $content_aligment, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'under_image',
					'on_dark_gradient',
					'from_bottom',
				),
			),
		) ),
		$elements_title,
		$show_title,
		$show_link,
		$show_excerpt,
		$show_zoom,
		$show_details,
		// Project Meta group.
		$show_categories,
		$show_date,
		$show_author,
		$show_comments,
		// Responsiveness group.
		array(
			"heading" => __("Responsiveness", 'dt-the7-core'),
			"param_name" => "responsiveness",
			"type" => "dropdown",
			"value" => array(
				"Post width based" => "post_width_based",
				"Browser width based" => "browser_width_based",
			),
			"group" => __( "Responsiveness", 'dt-the7-core' ),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array(
			"heading"		=> __( "Column minimum width (px)", 'dt-the7-core' ),
			"param_name"	=> "column_width",
			"type"			=> "textfield",
			"value"			=> "370",
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"post_width_based",
				),
			),
			"group" => __( "Responsiveness", 'dt-the7-core' ),
		),
		array(
			"heading"		=> __( "Desired columns number", 'dt-the7-core' ),
			"param_name"	=> "columns",
			"type"			=> "textfield",
			"value"			=> "2",
			"edit_field_class" => "vc_col-sm-6 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"post_width_based",
				),
			),
			"group" => __( "Responsiveness", 'dt-the7-core' ),
		),
		array(
			"heading" => __("Columns on Desktop", 'dt-the7-core'),
			"param_name" => "columns_on_desk",
			"type" => "textfield",
			"value" => "3",
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"group" => __( "Responsiveness", 'dt-the7-core' ),
		),
		array(
			"heading" => __("Columns on Horizontal Tablet", 'dt-the7-core'),
			"param_name" => "columns_on_htabs",
			"type" => "textfield",
			"value" => "3",
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"group" => __( "Responsiveness", 'dt-the7-core' ),
		),
		array(
			"heading" => __("Columns on Vertical Tablet", 'dt-the7-core'),
			"param_name" => "columns_on_vtabs",
			"type" => "textfield",
			"value" => "3",
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"group" => __( "Responsiveness", 'dt-the7-core' ),
		),
		array(
			"heading" => __("Columns on Mobile Phone", 'dt-the7-core'),
			"param_name" => "columns_on_mobile",
			"type" => "textfield",
			"value" => "3",
			"edit_field_class" => "vc_col-sm-3 vc_column",
			"dependency" => array(
				"element" => "responsiveness",
				"value" => array(
					"browser_width_based",
				),
			),
			"group" => __( "Responsiveness", 'dt-the7-core' ),
		),
	)
) );

/**
 * Portfolio justified grid.
 */

vc_map( array(
	"weight"	=> -1,
	"base"		=> 'dt_portfolio_jgrid',
	"name"		=> __( "Portfolio Justified Grid", 'dt-the7-core' ),
	"category"	=> __( 'by Dream-Theme', 'dt-the7-core' ),
	"icon"		=> "dt_vc_ico_portfolio",
	"class"		=> "dt_vc_sc_portfolio",
	"params"	=> array(
		// General group.
		$category,
		$number_order_title,
		$number,
		$posts_per_page,
		$orderby,
		$order,
		$filter_title,
		$show_filter,
		// Apppearace group.
		$loading_effect,
		array(
			"group" => __( "Appearance", 'dt-the7-core' ),
			"heading"		=> __( "Row target height (px)", 'dt-the7-core' ),
			"param_name"	=> "target_height",
			"type"			=> "textfield",
			"value"			=> "240",
			"edit_field_class" => "vc_col-xs-6 vc_column",
		),
		array(
			"group" => __( "Appearance", 'dt-the7-core' ),
			"heading"		=> '&nbsp;',
			"param_name" => "hide_last_row",
			"type" => "checkbox",
			"value" => array( "Hide last row if there's not enough images to fill it" => "true" ),
			"edit_field_class" => "vc_col-xs-6 vc_column",
		),
		$padding,
		$proportion,
		$design_title,
		array_merge( $descriptions, array( 'value' => array_diff( $descriptions['value'], array( 'under_image' ) ) ) ),
		array_merge( $hover_animation, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $hover_bg_color, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_hover_centered',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $bgwl_animation_effect, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'bg_with_lines' ),
			),
		) ),
		array_merge( $hover_content_visibility, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_dark_gradient',
					'bg_with_lines',
				),
			),
		) ),
		array_merge( $colored_bg_content_aligment, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array( 'on_hover_centered' ),
			),
		) ),
		array_merge( $content_aligment, array(
			"dependency"	=> array(
				"element"		=> "descriptions",
				"value"			=> array(
					'on_dark_gradient',
					'from_bottom',
				),
			),
		) ),
		$elements_title,
		$show_title,
		$show_link,
		$show_excerpt,
		$show_zoom,
		$show_details,
		// Project meta group.
		$show_categories,
		$show_date,
		$show_author,
		$show_comments,
	)
) );

/**
 * Portfolio masonry/grid.
 */

vc_map( array(
	'weight' => -1,
	'name' => __( 'Portfolio Masonry & Grid', 'the7mk2' ),
	'base' => 'dt_portfolio_masonry',
	'class' => 'dt_vc_sc_portfolio_masonry',
	'icon' => 'dt_vc_ico_portfolio',
	'category' => __( 'by Dream-Theme', 'the7mk2' ),
    "admin_enqueue_css" => array(get_template_directory_uri().'/fonts/icomoon-the7-portfolio-32x32/style.css'),
	'admin_enqueue_js' => array( plugin_dir_url( __FILE__ ) . 'portfolio-masonry/js/vc-editor-scripts.js' ),
	'params' => array(
		// General group.
		array(
			'heading' => __('Show', 'the7mk2'),
			'param_name' => 'post_type',
			'type' => 'dropdown',
			'std' => 'category',
			'value' => array(
				'All posts' => 'posts',
				'Posts from categories' => 'category',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		array(
			'type' => 'autocomplete',
			'heading' => __( 'Choose posts', 'the7mk2' ),
			'param_name' => 'posts',
			'settings' => array(
				'multiple' => true,
				'min_length' => 0,
			),
			'save_always' => true,
			'description' => __( 'Field accept post ID, title. Leave empty to show all posts.', 'the7mk2' ),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'post_type',
				'value' => 'posts',
			),
		),
		array(
			'type' => 'autocomplete',
			'heading' => __( 'Choose post categories', 'the7mk2' ),
			'param_name' => 'category',
			'settings' => array(
				'multiple' => true,
				'min_length' => 0,
			),
			'save_always' => true,
			'description' => __( 'Field accept category ID, title, slug. Leave empty to show all posts.', 'the7mk2' ),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'post_type',
				'value' => 'category',
			),
		),
		// - Layout Settings.
		array(
			'heading' => __( 'Layout Settings', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
		),
		array(
			'heading' => __('Mode', 'the7mk2'),
			'param_name' => 'mode',
			'type' => 'dropdown',
			'value' => array(
				'Masonry' => 'masonry',
				'Grid' => 'grid',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		array(
			"heading" => __("Loading effect", 'the7mk2'),
			"param_name" => "loading_effect",
			"type" => "dropdown",
			"value" => array(
				'None' => 'none',
				'Fade in' => 'fade_in',
				'Move up' => 'move_up',
				'Scale up' => 'scale_up',
				'Fall perspective' => 'fall_perspective',
				'Fly' => 'fly',
				'Flip' => 'flip',
				'Helix' => 'helix',
				'Scale' => 'scale'
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
		),
		array(
			'heading' => __('Layout', 'the7mk2'),
			'param_name' => 'layout',
			'type' => 'dt_radio_image',
			'value' => 'classic',
			'options' => array(
				'classic'       => array(
					'title' => _x( 'Classic', 'the7mk2' ),
					'src' => '/inc/shortcodes/images/portf-01.gif',
				),
				'bottom_overlap'        => array(
					'title' => _x( 'Bottom overlap (background)', 'the7mk2' ),
					'src' => '/inc/shortcodes/images/portf-02.gif',
				),
				'gradient_rollover'         => array(
					'title' => _x( 'Overlay (gradient)', 'the7mk2' ),
					'src' => '/inc/shortcodes/images/portf-04.gif',
				),
				'gradient_overlay'          => array(
					'title' => _x( 'Overlay (background)', 'the7mk2' ),
					'src' => '/inc/shortcodes/images/portf-03.gif',
				),
				'gradient_overlap'     => array(
					'title' => _x( 'Bottom overlap (gradient)', 'the7mk2' ),
					'src' => '/inc/shortcodes/images/portf-05.gif',
				),
			),
		),
		// -- Bottom overlap style.
		array(
			'heading' => __('Content area width', 'the7mk2'),
			'param_name' => 'bo_content_width',
			'type' => 'dt_number',
			'value' => '75%',
			'units' => '%, px',
			'min' => 0,
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'layout',
				'value' => 'bottom_overlap',
			),
		),
		array(
			'heading' => __('Content area overlap', 'the7mk2'),
			'param_name' => 'bo_content_overlap',
			'type' => 'dt_number',
			'value' => '100px',
			'units' => 'px',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			"dependency"	=> array(
				"element"		=> "layout",
				"value"			=> 'bottom_overlap',
			),
		),
		// -- Overlay (gradient).
		
		array(
			"heading"		=> __( "Animation", 'dt-the7-core' ),
			"param_name"	=> "hover_animation",
			"type"			=> "dropdown",
			"value"			=> array(
				'Fade'						=> 'fade',
				'Direction aware'			=> 'direction_aware',
				'Reverse direction aware'	=> 'redirection_aware',
				'Scale in'					=> 'scale_in',
			),
			"edit_field_class" => "vc_col-xs-12 vc_column dt_row-6",
			"dependency"	=> array(
				"element"		=> "layout",
				"value"			=> 'gradient_overlay',
			),
		),

		array(
			'heading' => __('Content alignment', 'the7mk2'),
			'param_name' => 'content_alignment',
			'type' => 'dropdown',
			'std' => 'left',
			'value' => array(
				'Left' => 'left',
				'Center' => 'center',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		// - Content Area.
		array(
			'heading' => __( 'Content Area', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
		),
		array(
			'heading' => __('Show background', 'the7mk2'),
			'param_name' => 'content_bg',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'dependency'	=> array(
				'element'	=> 'layout',
				'value' => array( 'classic', 'bottom_overlap', 'gradient_rollover', 'gradient_overlap' ),
			),
		),
		array(
			'heading'		=> __('Color', 'the7mk2'),
			'param_name'	=> 'custom_content_bg_color',
			'type'			=> 'colorpicker',
			'value'			=> '',
			'dependency'	=> array(
				'element'	=> 'content_bg',
				'value'		=> 'y',
			),
			'description'   => __( 'Leave empty to use default content boxes color & decoration. Note that decoration doesn\'t apply to gradient backgrounds.', 'the7mk2' ),
		),
		array(
			'heading' => __('Content area paddings', 'the7mk2'),
			'param_name' => 'post_content_paddings',
			'type' => 'dt_spacing',
			'value' => '25px 30px 30px 30px',
			'units' => 'px',
		),
		// - Image Settings.
		array(
			'heading' => __( 'Image Settings', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
		),
		array(
			'heading' => __('Image sizing', 'the7mk2'),
			'param_name' => 'image_sizing',
			'type' => 'dropdown',
			'std' => 'resize',
			'value' => array(
				'Preserve images proportions' => 'proportional',
				'Resize images' => 'resize',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		array(
			'headings' => array( __('Width', 'the7mk2'), __('Height', 'the7mk2') ),
			'param_name' => 'resized_image_dimensions',
			'type' => 'dt_dimensions',
			'value' => '1x1',
			'dependency' => array(
				'element' => 'image_sizing',
				'value' => 'resize',
			),
			'description' => __('Set image proportions, for example: 4x3, 3x2.', 'the7mk2'),
		),
		array(
			'heading' => __('Image border radius', 'the7mk2'),
			'param_name' => 'image_border_radius',
			'type' => 'dt_number',
			'value' => '0',
			'units' => 'px',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		array(
			'heading' => __('Image paddings', 'the7mk2'),
			'param_name' => 'image_paddings',
			'type' => 'dt_spacing',
			'value' => '0px 0px 0px 0px',
			'units' => 'px, %',
		),
		array(
			'heading' => __('Scale animation on hover', 'the7mk2'),
			'param_name' => 'image_scale_animation_on_hover',
			'type' => 'dropdown',
			'std' => 'quick_scale',
			'value' => array(
				'Disabled' => 'disabled',
				'Quick scale' => 'quick_scale',
				'Slow scale' => 'slow_scale',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),

		array(
			'heading' => __('Hover background color', 'the7mk2'),
			'param_name' => 'image_hover_bg_color',
			'type' => 'dropdown',
			'std' => 'solid_rollover_bg',
			'value' => array(
				'Disabled' => 'disabled',
				'Solid color' => 'solid_rollover_bg',
				'Gradient' => 'gradient_rollover_bg',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		array(
			'heading'		=> __('Background color', 'the7mk2'),
			'param_name'	=> 'custom_rollover_bg_color',
			'type'			=> 'colorpicker',
			'value'			=> '',
			'dependency'	=> array(
				'element'	=> 'image_hover_bg_color',
				'value' => array( 'solid_rollover_bg' ),
			),
			'description'   => __( 'Leave empty to use default hover color.', 'the7mk2' ),
		),
		array(
			'heading'		=> __('Gradient color 1', 'the7mk2'),
			'param_name'	=> 'custom_rollover_bg_color_1',
			'type'			=> 'colorpicker',
			'value'			=> '',
			'dependency'	=> array(
				'element'	=> 'image_hover_bg_color',
				'value'		=> 'gradient_rollover_bg',
			),
			'description'   => __( 'Leave empty to use default hover color.', 'the7mk2' ),
		),
		array(
			'heading'		=> __('Gradient color 2', 'the7mk2'),
			'param_name'	=> 'custom_rollover_bg_color_2',
			'type'			=> 'colorpicker',
			'value'			=> '',
			'dependency'	=> array(
				'element'	=> 'image_hover_bg_color',
				'value'		=> 'gradient_rollover_bg',
			),
			'description'   => __( 'Leave empty to use default hover color.', 'the7mk2' ),
		),
		array(
			'heading' => __('Gradient angle', 'the7mk2'),
			'param_name' => 'custom_rollover_gradient_deg',
			'type' => 'dt_number',
			'value' => '135deg',
			'units' => 'deg',
			'dependency'	=> array(
				'element'	=> 'image_hover_bg_color',
				'value'		=> 'gradient_rollover_bg',
			),
			'description'   => __( '(0 - 360)', 'the7mk2' ),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		
		// - Columns & Responsiveness.
		array(
			'heading' => __( 'Columns & Responsiveness', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
		),
		array(
			'heading' => __('Responsiveness mode', 'the7mk2'),
			'param_name' => 'responsiveness',
			'type' => 'dropdown',
			'value' => array(
				'Browser width based' => 'browser_width_based',
				'Post width based' => 'post_width_based',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		// -- Browser width based.
	    array(
			'heading' => __('Number of columns', 'the7mk2'),
			'param_name' => 'bwb_columns',
			'type' => 'dt_responsive_columns',
			'value' => 'desktop:3|h_tablet:3|v_tablet:2|phone:1',
			'dependency'	=> array(
				'element'	=> 'responsiveness',
				'value'		=> 'browser_width_based',
			),
		),
	    // -- Post width based.
		array(
			'heading' => __('Column minimum width', 'the7mk2'),
			'param_name' => 'pwb_column_min_width',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'dependency'	=> array(
				'element'	=> 'responsiveness',
				'value'		=> 'post_width_based',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		array(

			'heading' => __('Desired columns number', 'the7mk2'),
			'param_name' => 'pwb_columns',
			'type' => 'dt_number',
			'value' => '',
			'units' => '',
			'max' => 12,
			"dependency" => array("element" => "responsiveness", "value" => 'post_width_based' ),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		array(
			'heading' => __('Gap between columns', 'the7mk2'),
			'param_name' => 'gap_between_posts',
			'type' => 'dt_number',
			'value' => '15px',
			'units' => 'px',
			'description' => __('Please note that this setting affects post paddings. So, for example: a value 10px will give you 20px gaps between posts)', 'the7mk2'),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		array(
			'heading' => __('Make all posts the same width', 'the7mk2'),
			'param_name' => 'all_posts_the_same_width',
			'type' => 'dropdown',
			'value' => array(
				'No (wide post fills 2 col.)' => 'n',
				'Yes (wide post fills 1 col.)' => 'y',
			),
			'description'   => __( 'Post wide/normal width can be chosen in single post options.', 'the7mk2' ),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
		),
		
		// Project group.
		// - Post Title.
		array(
			'heading' => __('Links lead to', 'the7mk2'),
			'param_name' => 'link_lead',
			'type' => 'dropdown',
			'value' => array(
				'Project details page' => 'go_to_project',
				'External project link' => 'follow_link',
			),
			'group' => __( 'Project', 'the7mk2' ),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'description' => __('Affects project title, button & image links. External links can be set up for every portfolio project individually.', 'the7mk2'),
		),
		array(
			'heading' => __( 'Project Title', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __( 'Font style', 'the7mk2' ),
			'param_name' => 'post_title_font_style',
			'type' => 'dt_font_style',
			'value' => ':bold:',
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Font size', 'the7mk2'),
			'param_name' => 'post_title_font_size',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'edit_field_class' => 'vc_col-sm-3 vc_column',
			'description' => __( 'Leave empty to use H4 font size.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Line height', 'the7mk2'),
			'param_name' => 'post_title_line_height',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'edit_field_class' => 'vc_col-sm-3 vc_column',
			'description' => __( 'Leave empty to use H4 line height.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading'		=> __('Font color', 'the7mk2'),
			'param_name'	=> 'custom_title_color',
			'type'			=> 'colorpicker',
			'value'			=> '',
			'description' => __( 'Leave empty to use headers color.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Gap below title', 'the7mk2'),
			'param_name' => 'post_title_bottom_margin',
			'type' => 'dt_number',
			'value' => '5px',
			'units' => 'px',
			'group' => __( 'Project', 'the7mk2' ),
		),
		// - Meta Information.
		array(
			'heading' => __( 'Meta Information', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Show project date', 'the7mk2'),
			'param_name' => 'post_date',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Show project categories', 'the7mk2'),
			'param_name' => 'post_category',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Show project author', 'the7mk2'),
			'param_name' => 'post_author',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Show project comments', 'the7mk2'),
			'param_name' => 'post_comments',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __( 'Font style', 'the7mk2' ),
			'param_name' => 'meta_info_font_style',
			'type' => 'dt_font_style',
			'value' => '',
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Font size', 'the7mk2'),
			'param_name' => 'meta_info_font_size',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'edit_field_class' => 'vc_col-sm-3 vc_column',
			'description' => __( 'Leave empty to use small font size.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Line height', 'the7mk2'),
			'param_name' => 'meta_info_line_height',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'edit_field_class' => 'vc_col-sm-3 vc_column',
			'description' => __( 'Leave empty to use small line height.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading'		=> __('Font color', 'the7mk2'),
			'param_name'	=> 'custom_meta_color',
			'type'			=> 'colorpicker',
			'value'			=> '',
			'description' => __( 'Leave empty to use secondary text color.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Gap below meta info', 'the7mk2'),
			'param_name' => 'meta_info_bottom_margin',
			'type' => 'dt_number',
			'value' => '15px',
			'units' => 'px',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'group' => __( 'Project', 'the7mk2' ),
		),
		// - Text.
		array(
			'heading' => __( 'Text', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Content or excerpt', 'the7mk2'),
			'param_name' => 'post_content',
			'type' => 'dropdown',
			'std' => 'show_excerpt',
			'value' => array(
				'Off' => 'off',
				'Excerpt' => 'show_excerpt',
				'Content' => 'show_content',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Maximum number of words', 'the7mk2'),
			'param_name' => 'excerpt_words_limit',
			'type' => 'dt_number',
			'value' => '',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'post_content',
				'value' => 'show_excerpt',
			),

			'description' => __( 'Leave empty to show full text.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __( 'Font style', 'the7mk2' ),
			'param_name' => 'content_font_style',
			'type' => 'dt_font_style',
			'value' => '',
			'dependency' => array(
				'element' => 'post_content',
				'value' => array( 'show_excerpt', 'show_content' ),
			),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Font size', 'the7mk2'),
			'param_name' => 'content_font_size',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'edit_field_class' => 'vc_col-sm-3 vc_column',
			'dependency' => array(
				'element' => 'post_content',
				'value' => array( 'show_excerpt', 'show_content' ),
			),
			'description' => __( 'Leave empty to use medium font size.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Line height', 'the7mk2'),
			'param_name' => 'content_line_height',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'edit_field_class' => 'vc_col-sm-3 vc_column',
			'dependency' => array(
				'element' => 'post_content',
				'value' => array( 'show_excerpt', 'show_content' ),
			),
			'description' => __( 'Leave empty to use medium line height.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading'		=> __('Font color', 'the7mk2'),
			'param_name'	=> 'custom_content_color',
			'type'			=> 'colorpicker',
			'value'			=> '',
			'dependency' => array(
				'element' => 'post_content',
				'value' => array( 'show_excerpt', 'show_content' ),
			),
			'description' => __( 'Leave empty to use primary text color.', 'the7mk2' ),
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Gap below text', 'the7mk2'),
			'param_name' => 'content_bottom_margin',
			'type' => 'dt_number',
			'value' => '5px',
			'units' => 'px',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'post_content',
				'value' => array( 'show_excerpt', 'show_content' ),
			),
			'group' => __( 'Project', 'the7mk2' ),
		),
		// - "Read More" Button.
		array(
			'heading' => __( 'Button', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Button style', 'the7mk2'),
			'param_name' => 'read_more_button',
			'type' => 'dropdown',
			'std' => 'default_link',
			'value' => array(
				'Off' => 'off',
				'Default link' => 'default_link',
				'Default button' => 'default_button',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'group' => __( 'Project', 'the7mk2' ),
		),
		array(
			'heading' => __('Button text', 'the7mk2'),
			'param_name' => 'read_more_button_text',
			'type' => 'textfield',
			'value' => 'Read more',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'read_more_button',
				'value'	=> array(
					'default_link',
					'default_button',
				),
			),
			'group' => __( 'Project', 'the7mk2' ),
		),
		//Icons
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading' => __('External link', 'the7mk2'),
			'param_name' => 'show_link',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
		),
		array(
	  		"group" => __("Icons", 'the7mk2'),
			"heading" => __("Choose external link icon", "the7mk2"),
			"param_name" => "external_link_icon",
			"type" => "dt_navigation",
			"value" => "icon-portfolio-p204",
			'dependency'	=> array(
				'element'	=> 'show_link',
				'value'		=> 'y',
				'callback'  => 'the7PortfolioMasonryIconsDependencyCallback',
			),
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading' => __('Image zoom', 'the7mk2'),
			'param_name' => 'show_zoom',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
		),
		array(
	  		"group" => __("Icons", 'the7mk2'),
			"heading" => __("Choose image zoom icon", "the7mk2"),
			"param_name" => "image_zoom_icon",
			"type" => "dt_navigation",
			"value" => "icon-portfolio-p203",
			'dependency'	=> array(
				'element'	=> 'show_zoom',
				'value'		=> 'y',
			),
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading' => __('Link to project page', 'the7mk2'),
			'param_name' => 'show_details',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
		),
		array(
	  		"group" => __("Icons", 'the7mk2'),
			"heading" => __("Choose project page link icon", "the7mk2"),
			"param_name" => "project_link_icon",
			"type" => "dt_navigation",
			"value" => "icon-portfolio-p205",
			'dependency'	=> array(
				'element'	=> 'show_details',
				'value'		=> 'y',
			),
		),
		
		array(
			"group" => __("Icons", 'the7mk2'),
			"heading" => __( "Icon Size & Background", 'the7mk2' ),
			"param_name" => "dt_project_icon_title",
			"type" => "dt_title",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			"heading" => __("Icon size", 'the7mk2'),
			"param_name" => "project_icon_size",
			"type" => "dt_number",
			"value" => "16px",
			"units" => "px",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			"heading" => __("Background size", 'the7mk2'),
			"param_name" => "project_icon_bg_size",
			"type" => "dt_number",
			"value" => "40px",
			"units" => "px",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			"heading" => __("Border width", 'the7mk2'),
			"param_name" => "project_icon_border_width",
			"type" => "dt_number",
			"value" => "0",
			"units" => "px",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			"heading" => __("Border radius", 'the7mk2'),
			"param_name" => "project_icon_border_radius",
			"type" => "dt_number",
			"value" => "100px",
			"units" => "px",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),

		array(
			"group" => __( "Icons", 'the7mk2' ),
			"heading" => __("Gap between icons", 'the7mk2'),
			"param_name" => "project_icon_gap",
			"type" => "dt_number",
			"value" => "10px",
			"units" => "px",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __( "Icons", 'the7mk2' ),
			"heading" => __("Gap below icons", 'the7mk2'),
			"param_name" => "project_icon_below_gap",
			"type" => "dt_number",
			"value" => "10px",
			"units" => "px",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __( "Icons", 'the7mk2' ),
			"heading" => __("Gap above icons", 'the7mk2'),
			"param_name" => "project_icon_above_gap",
			"type" => "dt_number",
			"value" => "10px",
			"units" => "px",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			"heading" => __( "Normal", 'the7mk2' ),
			"param_name" => "dt_soc_icon_title",
			"type" => "dt_title",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading' => __('Icon color', 'the7mk2'),
			'description' => __( "Live empty to use accent color.", 'the7mk2' ),
			'param_name' => 'project_icon_color',
			'type' => 'colorpicker',
			'value' => 'rgba(255,255,255,1)',
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading' => __('Icon border color  ', 'the7mk2'),
			'description' => __( "Live empty to use accent color.", 'the7mk2' ),
			'param_name' => 'project_icon_border_color',
			'type' => 'colorpicker',
			'value' => '',
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading' => __('Show icon background', 'the7mk2'),
			'param_name' => 'project_icon_bg',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading'		=> __('Icon background color', 'the7mk2'),
			'param_name'	=> 'project_icon_bg_color',
			'type'			=> 'colorpicker',
			'value'			=> '',
			'dependency'	=> array(
				'element'	=> 'project_icon_bg',
				'value'		=> 'y',
			),
			'description'   => __( 'Live empty to use accent color.', 'the7mk2' ),
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			"heading" => __( "Hover", 'the7mk2' ),
			"param_name" => "dt_soc_icon_title",
			"type" => "dt_title",
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading' => __('Icon color', 'the7mk2'),
			'description' => __( "Live empty to use accent color.", 'the7mk2' ),
			'param_name' => 'project_icon_color_hover',
			'type' => 'colorpicker',
			'value' => 'rgba(255,255,255,0.75)',
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading' => __('Icon border color  ', 'the7mk2'),
			'description' => __( "Live empty to use accent color.", 'the7mk2' ),
			'param_name' => 'project_icon_border_color_hover',
			'type' => 'colorpicker',
			'value' => '',
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading' => __('Show icon background', 'the7mk2'),
			'param_name' => 'project_icon_bg_hover',
			'type' => 'dt_switch',
			'value' => 'y',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),
		array(
			"group" => __("Icons", 'the7mk2'),
			'heading'		=> __('Icon background color', 'the7mk2'),
			'param_name'	=> 'project_icon_bg_color_hover',
			'type'			=> 'colorpicker',
			'value'			=> '',
			'dependency'	=> array(
				'element'	=> 'project_icon_bg_hover',
				'value'		=> 'y',
			),
			'description'   => __( 'Live empty to use accent color.', 'the7mk2' ),
			"edit_field_class" => "the7-icons-dependent vc_col-xs-12",
		),

		// - Pagination & Categorization group.
		array(
			'heading' => __( 'Pagination', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Pagination mode', 'the7mk2'),
			'param_name' => 'loading_mode',
			'type' => 'dropdown',
			'std' => 'disabled',
			'value' => array(
				'Disabled' => 'disabled',
				'Standard' => 'standard',
				'JavaScript pages' => 'js_pagination',
				'"Load more" button' => 'js_more',
				'Infinite scroll' => 'js_lazy_loading',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		// -- Disabled.
		array(
			'heading' => __('Total number of posts', 'the7mk2'),
			'param_name' => 'dis_posts_total',
			'type' => 'dt_number',
			'value' => '',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'disabled',
			),
			'description' => __('Leave empty to display all posts.', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		// -- Standard.
		array(
			'heading' => __('Number of posts to display on one page', 'the7mk2'),
			'param_name' => 'st_posts_per_page',
			'type' => 'dt_number',
			'value' => '',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'standard',
			),
			'description' => __('Leave empty to use number from wp settings.', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Show all pages in paginator', 'the7mk2'),
			'param_name' => 'st_show_all_pages',
			'type' => 'dt_switch',
			'value' => 'n',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'standard',
			),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Gap before pagination', 'the7mk2'),
			'param_name' => 'st_gap_before_pagination',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'standard',
			),
			'description' => __('Leave empty to use default gap', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		// -- JavaScript pages.
		array(
			'heading' => __('Total number of posts', 'the7mk2'),
			'param_name' => 'jsp_posts_total',
			'type' => 'dt_number',
			'value' => '',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'js_pagination',
			),
			'description' => __('Leave empty to display all posts.', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Number of posts to display on one page', 'the7mk2'),
			'param_name' => 'jsp_posts_per_page',
			'type' => 'dt_number',
			'value' => '',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'js_pagination',
			),
			'description' => __('Leave empty to use number from wp settings.', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Show all pages in paginator', 'the7mk2'),
			'param_name' => 'jsp_show_all_pages',
			'type' => 'dt_switch',
			'value' => 'n',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'js_pagination',
			),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Gap before pagination', 'the7mk2'),
			'param_name' => 'jsp_gap_before_pagination',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'js_pagination',
			),
			'description' => __('Leave empty to use default gap', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		// -- js Load more.
		array(
			'heading' => __('Total number of posts', 'the7mk2'),
			'param_name' => 'jsm_posts_total',
			'type' => 'dt_number',
			'value' => '',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'js_more',
			),
			'description' => __('Leave empty to display all posts.', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Number of posts to display on one page', 'the7mk2'),
			'param_name' => 'jsm_posts_per_page',
			'type' => 'dt_number',
			'value' => '',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'js_more',
			),
			'description' => __('Leave empty to use number from wp settings.', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Gap before pagination', 'the7mk2'),
			'param_name' => 'jsm_gap_before_pagination',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'js_more',
			),
			'description' => __('Leave empty to use default gap', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		// -- js Infinite scroll.
		array(
			'heading' => __('Total number of posts', 'the7mk2'),
			'param_name' => 'jsl_posts_total',
			'type' => 'dt_number',
			'value' => '',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'js_lazy_loading',
			),
			'description' => __('Leave empty to display all posts.', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Number of posts to display on one page', 'the7mk2'),
			'param_name' => 'jsl_posts_per_page',
			'type' => 'dt_number',
			'value' => '',
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'dependency' => array(
				'element' => 'loading_mode',
				'value'	=> 'js_lazy_loading',
			),
			'description' => __('Leave empty to use number from wp settings.', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __( 'Categorization & Ordering', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'value' => '',
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Order', 'the7mk2'),
			'param_name' => 'order',
			'type' => 'dropdown',
			'std' => 'desc',
			'value' => array(
				'Ascending' => 'asc',
				'Descending' => 'desc',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Order by', 'the7mk2'),
			'param_name' => 'orderby',
			'type' => 'dropdown',
			'value' => array(
				'Date' => 'date',
				'Name' => 'title',
				'Rand' => 'rand',
			),
			'edit_field_class' => 'vc_col-xs-12 vc_column dt_row-6',
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Show categories filter', 'the7mk2'),
			'param_name' => 'show_categories_filter',
			'type' => 'dt_switch',
			'value' => 'n',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Show name / date ordering', 'the7mk2'),
			'param_name' => 'show_orderby_filter',
			'type' => 'dt_switch',
			'value' => 'n',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Show asc. / desc. ordering', 'the7mk2'),
			'param_name' => 'show_order_filter',
			'type' => 'dt_switch',
			'value' => 'n',
			'options' => array(
				'Yes' => 'y',
				'No' => 'n',
			),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __( 'Gap below categorization & ordering', 'the7mk2' ),
			'param_name' => 'gap_below_category_filter',
			'type' => 'dt_number',
			'value' => '',
			'units' => 'px',
			'description' => __('Leave empty to use default gap', 'the7mk2'),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __( 'Color Settings', 'the7mk2' ),
			'param_name' => 'dt_title',
			'type' => 'dt_title',
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Font color', 'the7mk2'),
			'param_name' => 'navigation_font_color',
			'type' => 'colorpicker',
			'value' => '',
			'description' => __( 'Leave empty to use headers color.', 'the7mk2' ),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
		array(
			'heading' => __('Accent color', 'the7mk2'),
			'param_name' => 'navigation_accent_color',
			'type' => 'colorpicker',
			'value' => '',
			'description' => __( 'Leave empty to use accent color.', 'the7mk2' ),
			'group' => __( 'Pagination & Categorization', 'the7mk2' ),
		),
	),
) );
