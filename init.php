<?php
/*
Plugin Name: bbPress Visual Hooks
Plugin URI: http://jaredatchison.com/
Description: Output the different bbPress hooks directly on your site for a quick and handy reference.
Version: 1.2
Author: Jared Atchison
Author URI: http://jaredatchison.com
*/

/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @version 1.2
 * @author Jared Atchison
 * @copyright Copyright (c) 2012, Jared Atchison
 * @link http://jaredatchison.com
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/**
 * Main bbPress Genesis Extend init class
 */
class bbp_visual_hooks {

	/**
	 * @var array list of bbPress hooks
	 */
	public $bbp_visual_hooks = '';

	/**
	 * __construct()
	 */
	function __construct() {
		add_action( 'bbp_init',           array( $this, 'hook_list' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'styles'    ) );
	}

	/**
	 * styles()
	 */
	function styles() {
		wp_register_style( 'bbpress-visual-hooks', plugin_dir_url( __FILE__ ) . 'style.css' );
	    wp_enqueue_style( 'bbpress-visual-hooks' );
	}

	/**
	 * hook_list()
	 *
	 * List of all hooks within bbp-theme-compat
	 */
	function hook_list() {

		$bbp_visual_hooks = array(
			'bbp_after_main_content',
			'bbp_after_popular_topics',
			'bbp_after_statistics',
			'bbp_before_main_content',
			'bbp_before_popular_topics',
			'bbp_before_statistics',
			'bbp_template_after_forums_index',
			'bbp_template_after_forums_loop',
			'bbp_template_after_lead_topic',
			'bbp_template_after_pagination_loop',
			'bbp_template_after_replies_loop',
			'bbp_template_after_search_results',
			'bbp_template_after_search_results_loop',
			'bbp_template_after_single_forum',
			'bbp_template_after_single_reply',
			'bbp_template_after_single_topic',
			'bbp_template_after_topic_tag_description',
			'bbp_template_after_topic_tag_edit',
			'bbp_template_after_topics_index',
			'bbp_template_after_topics_loop',
			'bbp_template_after_user_details',
			'bbp_template_after_user_favorites',
			'bbp_template_after_user_profile',
			'bbp_template_after_user_replies',
			'bbp_template_after_user_subscriptions',
			'bbp_template_after_user_topics_created',
			'bbp_template_before_forums_index',
			'bbp_template_before_forums_loop',
			'bbp_template_before_lead_topic',
			'bbp_template_before_pagination_loop',
			'bbp_template_before_replies_loop',
			'bbp_template_before_search',
			'bbp_template_before_search_results_loop',
			'bbp_template_before_single_forum',
			'bbp_template_before_single_reply',
			'bbp_template_before_single_topic',
			'bbp_template_before_topic_tag_description',
			'bbp_template_before_topic_tag_edit',
			'bbp_template_before_topics_index',
			'bbp_template_before_topics_loop',
			'bbp_template_before_user_details',
			'bbp_template_before_user_favorites',
			'bbp_template_before_user_profile',
			'bbp_template_before_user_replies',
			'bbp_template_before_user_subscriptions',
			'bbp_template_before_user_topics_created',
			'bbp_template_notices',
			'bbp_theme_after_anonymous_form',
			'bbp_theme_after_forum_content',
			'bbp_theme_after_forum_description',
			'bbp_theme_after_forum_form_content',
			'bbp_theme_after_forum_form_parent',
			'bbp_theme_after_forum_form_status',
			'bbp_theme_after_forum_form_submit_button',
			'bbp_theme_after_forum_form_submit_wrapper',
			'bbp_theme_after_forum_form_title',
			'bbp_theme_after_forum_form_type',
			'bbp_theme_after_forum_form',
			'bbp_theme_after_forum_freshness_link',
			'bbp_theme_after_forum_sub_forums',
			'bbp_theme_after_forum_subscription_action',
			'bbp_theme_after_forum_title',
			'bbp_theme_after_forum_visibility_status',
			'bbp_theme_after_reply_admin_links',
			'bbp_theme_after_reply_author_admin_details',
			'bbp_theme_after_reply_author_details',
			'bbp_theme_after_reply_content',
			'bbp_theme_after_reply_form_content',
			'bbp_theme_after_reply_form_revisions',
			'bbp_theme_after_reply_form_submit_button',
			'bbp_theme_after_reply_form_submit_wrapper',
			'bbp_theme_after_reply_form_subscription',
			'bbp_theme_after_reply_form_tags',
			'bbp_theme_after_reply_form',
			'bbp_theme_after_topic_admin_links',
			'bbp_theme_after_topic_author_admin_details',
			'bbp_theme_after_topic_author_details',
			'bbp_theme_after_topic_author',
			'bbp_theme_after_topic_content',
			'bbp_theme_after_topic_favorites_action',
			'bbp_theme_after_topic_form_content',
			'bbp_theme_after_topic_form_forum',
			'bbp_theme_after_topic_form_revisions',
			'bbp_theme_after_topic_form_status',
			'bbp_theme_after_topic_form_submit_button',
			'bbp_theme_after_topic_form_submit_wrapper',
			'bbp_theme_after_topic_form_subscriptions',
			'bbp_theme_after_topic_form_tags',
			'bbp_theme_after_topic_form_title',
			'bbp_theme_after_topic_form_type',
			'bbp_theme_after_topic_form',
			'bbp_theme_after_topic_freshness_author',
			'bbp_theme_after_topic_freshness_link',
			'bbp_theme_after_topic_meta',
			'bbp_theme_after_topic_started_by',
			'bbp_theme_after_topic_started_in',
			'bbp_theme_after_topic_subscription_action',
			'bbp_theme_after_topic_title',
			'bbp_theme_anonymous_form_extras_bottom',
			'bbp_theme_anonymous_form_extras_top',
			'bbp_theme_before_anonymous_form',
			'bbp_theme_before_forum_content',
			'bbp_theme_before_forum_description',
			'bbp_theme_before_forum_form_content',
			'bbp_theme_before_forum_form_notices',
			'bbp_theme_before_forum_form_parent',
			'bbp_theme_before_forum_form_status',
			'bbp_theme_before_forum_form_submit_button',
			'bbp_theme_before_forum_form_submit_wrapper',
			'bbp_theme_before_forum_form_title',
			'bbp_theme_before_forum_form_type',
			'bbp_theme_before_forum_form',
			'bbp_theme_before_forum_freshness_link',
			'bbp_theme_before_forum_sub_forums',
			'bbp_theme_before_forum_subscription_action',
			'bbp_theme_before_forum_title',
			'bbp_theme_before_reply_admin_links',
			'bbp_theme_before_reply_author_admin_details',
			'bbp_theme_before_reply_author_details',
			'bbp_theme_before_reply_content',
			'bbp_theme_before_reply_form_content',
			'bbp_theme_before_reply_form_notices',
			'bbp_theme_before_reply_form_revisions',
			'bbp_theme_before_reply_form_submit_button',
			'bbp_theme_before_reply_form_submit_wrapper',
			'bbp_theme_before_reply_form_subscription',
			'bbp_theme_before_reply_form_tags',
			'bbp_theme_before_reply_form',
			'bbp_theme_before_topic_admin_links',
			'bbp_theme_before_topic_author_admin_details',
			'bbp_theme_before_topic_author_details',
			'bbp_theme_before_topic_author',
			'bbp_theme_before_topic_content',
			'bbp_theme_before_topic_favorites_action',
			'bbp_theme_before_topic_form_content',
			'bbp_theme_before_topic_form_forum',
			'bbp_theme_before_topic_form_notices',
			'bbp_theme_before_topic_form_revisions',
			'bbp_theme_before_topic_form_status',
			'bbp_theme_before_topic_form_submit_button',
			'bbp_theme_before_topic_form_submit_wrapper',
			'bbp_theme_before_topic_form_subscriptions',
			'bbp_theme_before_topic_form_tags',
			'bbp_theme_before_topic_form_title',
			'bbp_theme_before_topic_form_type',
			'bbp_theme_before_topic_form',
			'bbp_theme_before_topic_freshness_author',
			'bbp_theme_before_topic_freshness_link',
			'bbp_theme_before_topic_meta',
			'bbp_theme_before_topic_started_by',
			'bbp_theme_before_topic_started_in',
			'bbp_theme_before_topic_subscription_action',
			'bbp_theme_before_topic_title',
			'bbp_user_edit_after_about',
			'bbp_user_edit_after_account',
			'bbp_user_edit_after_contact',
			'bbp_user_edit_after_name',
			'bbp_user_edit_after',
			'bbp_user_edit_after_role',
			'bbp_user_edit_before_about',
			'bbp_user_edit_before_account',
			'bbp_user_edit_before_contact',
			'bbp_user_edit_before_name',
			'bbp_user_edit_before',
			'bbp_user_edit_before_role',
			'login_form',
			'register_form',
		);

		foreach ( $bbp_visual_hooks as $hook ) {
			add_action( $hook , array( $this, 'inject_hook' ) , 1 );
		}

	}

	/**
	 * inject_hook()
	 *
	 * Injects the hook identifiers
	 */
	function inject_hook () {

		// The hooks can be temporarily hidden by passing 'show_hooks'
		// Example: yourdomain.com/forums/?show_hooks=false
		if ( !isset( $_GET['show_hooks'] ) ) {

			$current_action = current_filter();

			echo '<div class="bbp-hook" title="' . $current_action . '">' . $current_action . '</div>';
		}

	}

}

new bbp_visual_hooks();