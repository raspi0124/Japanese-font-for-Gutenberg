<?php
/*
Plugin Name: Japanese font for Gutenberg
Description: Add Japanese font to Gutenberg.Coding in progress!Pull request are very welcome!
Version: 0.4
Author: raspi0124
Author URI: https://raspi-diary.com/
License: GPL2
*/
/*  Copyright 2017 raspi0124 (email : admin@raspi-diary.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function gutenjpfont_noto() {
    wp_register_script(
        'gutenjpfont_js',
        plugins_url( 'addfont.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element' )
    );
    wp_register_style(
        'gutenjpfont_css',
        plugins_url( 'addfont.css', __FILE__ ),
        array( 'wp-edit-blocks' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'addfont.css' )
    );

    register_block_type( 'gutenjpfont/noto', array(
        'editor_script' => 'gutenjpfont_js',
        'editor_style'  => 'gutenjpfont_css',
    ) );
}
add_action( 'init', 'gutenjpfont_noto' );

