<?php
/**
 * Provides helper functions.
 *
 * @since	  1.0.0
 *
 * @package	RBM_Evaluations_CPT
 * @subpackage RBM_Evaluations_CPT/core
 */
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Returns the main plugin object
 *
 * @since		1.0.0
 *
 * @return		RBM_Evaluations_CPT
 */
function RBMEVALUATIONSCPT() {
	return RBM_Evaluations_CPT::instance();
}