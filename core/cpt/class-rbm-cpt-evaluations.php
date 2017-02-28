<?php

/**
 * Class RBM_CPT_Evaluations
 *
 * Creates the post type.
 *
 * @since {{VERSION}}
 */
class RBM_CPT_Evaluations extends RBM_CPT {

	public $post_type = 'evaluations';
	public $label_singular = null;
	public $label_plural = null;
	public $labels = array();
	public $icon = 'admin-post';
	public $post_args = array(
		'hierarchical' => true,
		'supports'     => array( 'title', 'editor', 'author', 'thumbnail' ),
		'has_archive'  => false,
		'rewrite'      => array(
			'slug'       => 'evaluations',
			'with_front' => false,
			'feeds'      => false,
			'pages'      => true
		),
	);

	/**
	 * RBM_CPT_Evaluations constructor.
	 *
	 * @since {{VERSION}}
	 */
	function __construct() {

		// This allows us to Localize the Labels
		$this->label_singular = __( 'Evaluation', RBM_Evaluations_CPT_ID );
		$this->label_plural   = __( 'Evaluations', RBM_Evaluations_CPT_ID );

		$this->labels = array(
			'menu_name' => __( 'Evaluations', RBM_Evaluations_CPT_ID ),
			'all_items' => __( 'All Evaluations', RBM_Evaluations_CPT_ID ),
		);

		parent::__construct();
		
	}
}