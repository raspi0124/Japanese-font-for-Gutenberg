<?php
/*
Plugin Name: Japanese font for Gutenberg
Description: Add Japanese font to Gutenberg.Coding in progress!Pull request are very welcome!
Version: alpha-1
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
//load files plugin need.
function gutenjpfont_style() {
    wp_register_style( 'gutenjpfont-styles',  plugin_dir_url( __FILE__ ) . 'addfont.css' );
    wp_enqueue_style( 'gutenjpfont-styles' );
}

function gutenjpfont_enqueue_script()
{   
    wp_enqueue_script( 'gutenjpfont_script', plugin_dir_url( __FILE__ ) . 'addfont.js' );
}
add_action( 'wp_enqueue_scripts', 'gutenjpfont_script' );
add_action('admin_enqueue_scripts', 'gutenjpfont_script');
add_action( 'wp_enqueue_scripts', 'gutenjpfont_style' );
add_action( 'admin_enqueue_scripts', 'gutenjpfont_style' );

