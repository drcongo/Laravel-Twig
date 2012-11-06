<?php

use Laravel\Config;
use Laravel\HTML;
use Laravel\Input;
use Laravel\Lang;
use Laravel\Str;
use Laravel\URL;


function twig_fn_form_open($action=null, $method='POST', $attributes=array(), $https=false)
{
    return Form::open($action, $method, $attributes, $https);
}

function twig_fn_form_search_open($action=null, $method='POST', $attributes=array(), $https=false)
{
    return Form::search_open($action, $method, $attributes, $https);
}

function twig_fn_form_search_box($action=null, $method='POST', $attributes=array(), $https=false)
{
    return Form::search_box($action, $method, $attributes, $https);
}

function twig_fn_form_open_secure($action=null, $method='POST', $attributes=array(), $https=false)
{
    return Form::open_secure($action, $method, $attributes, $https);
}

function twig_fn_form_open_for_files($action=null, $method='POST', $attributes=array(), $https=false)
{
    return Form::open_for_files($action, $method, $attributes, $https);
}

function twig_fn_form_open_secure_for_files($action=null, $method='POST', $attributes=array(), $https=false)
{
    return Form::open_secure_for_files($action, $method, $attributes, $https);
}

function twig_fn_form_close()
{
    return Form::close();
}

function twig_fn_form_token()
{
    return Form::token();
}

function twig_fn_form_label($name, $value, $attributes=array())
{
    return Form::label($name, $value, $attributes);
}

function twig_fn_form_input($type, $name, $value=null, $attributes=array())
{
    return Form::input($type, $name, $value, $attributes);
}

function twig_fn_form_text($name, $value=null, $attributes=array())
{
    return Form::text($name, $value, $attributes);
}

function twig_fn_form_password($name, $attributes=array())
{
    return Form::password($name, $attributes);
}

function twig_fn_form_hidden($name, $value=null, $attributes=array())
{
    return Form::hidden($name, $value, $attributes);
}

function twig_fn_form_search($name, $value=null, $attributes=array())
{
    return Form::search($name, $value, $attributes);
}

function twig_fn_form_email($name, $value=null, $attributes=array())
{
    return Form::email($name, $value, $attributes);
}

function twig_fn_form_telephone($name, $value=null, $attributes=array())
{
    return Form::telephone($name, $value, $attributes);
}

function twig_fn_form_url($name, $value=null, $attributes=array())
{
    return Form::url($name, $value, $attributes);
}

function twig_fn_form_number($name, $value=null, $attributes=array())
{
    return Form::number($name, $value, $attributes);
}

function twig_fn_form_date($name, $value=null, $attributes=array())
{
    return Form::date($name, $value, $attributes);
}

function twig_fn_form_file($name, $attributes=array())
{
    return Form::file($name, $attributes);
}

function twig_fn_form_textarea($name, $value='', $attributes=array())
{
    return Form::textarea($name, $value, $attributes);
}

function twig_fn_form_select($name, $options=array(), $selected=null, $attributes=array())
{
    return Form::select($name, $options, $selected, $attributes);
}

function twig_fn_form_optgroup($options, $label, $selected)
{
    return Form::optgroup($options, $label, $selected);
}

function twig_fn_form_option($value, $display, $selected)
{
    return Form::option($value, $display, $selected);
}

function twig_fn_form_checkbox($name, $value=1, $checked=false, $attributes=array())
{
    return Form::checkbox($name, $value, $checked, $attributes);
}

function twig_fn_form_radio($name, $value=1, $checked=false, $attributes=array())
{
    return Form::radio($name, $value, $checked, $attributes);
}

function twig_fn_form_checkable($type, $name, $value=1, $checked=false, $attributes=array())
{
    return Form::checkable($type, $name, $value, $checked, $attributes);
}

function twig_fn_form_submit($value, $attributes=array())
{
    return Form::submit($value, $attributes);
}

function twig_fn_form_reset($value, $attributes=array())
{
    return Form::reset($value, $attributes);
}

function twig_fn_form_image($url, $name, $attributes=array())
{
    return Form::image($url, $name, $attributes);
}

function twig_fn_form_button($value, $attributes=array())
{
    return Form::button($value, $attributes);
}

function twig_fn_form_id($name, $attributes)
{
    return Form::id($name, $attributes);
}

/* BOOTSTRAPPER */

function twig_fn_boot_styles()
{
    return Asset::container('bootstrapper')->styles();
}

function twig_fn_boot_scripts()
{
    return Asset::container('bootstrapper')->scripts();
}

function twig_fn_form_horizontal_open($action=null, $method='POST', $attributes=array(), $https=false)
{
    return Form::horizontal_open($action, $method, $attributes, $https);
}

function twig_fn_form_control_group($label, $control, $group_class = '', $help = null)
{
    return Form::control_group($label, $control, $group_class, $help);
}



/**
 * Read and return a config value
 *
 * @param string $conf    The config value to lookup
 * @param string $default The default value to use
 *
 * @return mixed
 */
function twig_fn_config($conf, $default = null)
{
	return Config::get($conf, $default);
}


/**
 * Get a value
 *
 * @param        $name
 * @param string $default
 *
 * @return mixed
 */
function twig_fn_val($name, $default = '')
{
	return Input::get($name, $default);
}

/**
 * Get a language specific line
 *
 * @param string $key   The Key to search
 * @param array  $subst array The values to substitute
 * @param string $lang  string The language
 *
 * @return string
 */
function twig_fn_tr($key, $subst = null, $lang = 'en')
{
	if (is_null($subst))
	{
		return Lang::line($key, array())->get($lang);
	}
	else
	{
		parse_str($subst, $repl);
		return Lang::line($key, $repl)->get($lang);
	}
}

/**
 * Generate a URL
 *
 * @param string $route
 * @param string $params
 *
 * @return string
 */
function twig_fn_url_to($route, $params = '')
{
	if (strlen(trim($params)) == 0)
	{
		return URL::to_action($route, array(), false);
	}
	else
	{
        parse_str($params, $repl);
		return URL::to_action($route, $repl, false);
	}
}

/**
 * Generate a HTTPS URL
 *
 * @param string $route
 * @param string $params
 *
 * @return string
 */
function twig_fn_secure_url_to($route, $params = '')
{
	$attrs = array();

	if (strlen(trim($params)) != 0)
	{
		parse_str($params, $attrs);
	}

	return URL::to_action($route, $attrs, true);
}

/**
 * Generate URL to a route
 *
 * @param string $route
 * @param string $params
 *
 * @return string
 */
function twig_fn_url_to_route($route, $params = '')
{
	$attrs = array();

	if (strlen(trim($params)) != 0)
	{
		parse_str($params, $attrs);
	}

	return URL::to_route($route, $attrs);
}

/**
 * Generate URL to a secure route
 *
 * @param string $route
 * @param string $params
 *
 * @return string
 */
function twig_fn_url_to_secure_route($route, $params = '')
{
	$attrs = array();

	if (strlen(trim($params)) != 0)
	{
		parse_str($params, $attrs);
	}

	return URL::to_route($route, $attrs, true);
}

/**
 * Generate a script tag
 *
 * @param string $file
 * @param string $params
 *
 * @return string
 */
function twig_fn_script($file, $params = '')
{
	$attrs = array();

	if (strlen(trim($params)) != 0)
	{
		parse_str($params, $attrs);
	}

	if (strtolower(substr(trim($file), 0, 4)) == 'http')
	{
		$url = HTML::entities($file);
	}
	else
	{
		$url = HTML::entities(Config::get('site.asset.url').$file);
	}

	return '<script type="text/javascript" src="'.$url.'"'.HTML::attributes($attrs).'></script>';
}

/**
 * Generate a style tag
 *
 * @param string $file
 * @param string $params
 *
 * @return string
 */
function twig_fn_style($file, $params = '')
{

	$attrs = array();

	if (strlen(trim($params)) != 0)
	{
		parse_str($params, $attrs);
	}

	$defaults = array(
		'media' => 'all',
		'type'  => 'text/css',
		'rel'   => 'stylesheet'
	);

	foreach ($defaults as $attribute => $default)
	{
		if (! array_key_exists($attribute, $attrs))
		{
			$attrs[$attribute] = $default;
		}
	}

	if (strtolower(substr($file, 0, 4)) == 'http')
	{
		$url = HTML::entities($file);
	}
	else
	{
		$url = HTML::entities(Config::get('site.asset.url').$file);
	}

	return '<link href="'.$url.'"'.HTML::attributes($attrs).'>';
}

/**
 * Generate a hyperlink
 *
 * @param string $dest
 * @param string $title
 * @param string $params
 *
 * @return string
 */
function twig_fn_link($dest, $title, $params = '')
{
	$attrs = array();

	if (strlen(trim($params)) != 0)
	{
		parse_str($params, $attrs);
	}

	return HTML::link($dest, $title, $attrs, false);
}

/**
 * Generate a secure hyperlink
 *
 * @param string $dest
 * @param string $title
 * @param string $params
 *
 * @return string
 */
function twig_fn_secure_link($dest, $title, $params = '')
{
	$attrs = array();

	if (strlen(trim($params)) != 0)
	{
		parse_str($params, $attrs);
	}

	return HTML::link($dest, $title, $attrs, true);
}

/**
 * Generate an image tag
 *
 * @param string $file
 * @param string $alt
 * @param string $params
 *
 * @return string
 */
function twig_fn_image($file, $alt = '', $params = '')
{
	$attrs = array();

	if (strlen(trim($params)) != 0)
	{
		parse_str($params, $attrs);
	}

	$attrs['alt'] = $alt;

	if (strtolower(substr($file, 0, 4)) == 'http')
	{
		$url = $file;
	}
	else
	{
		$url = Config::get('site.asset.url').$file;
	}

	return '<img src="'.HTML::entities($url).'"'.HTML::attributes($attrs).'>';
}

/**
 * Generate an obfuscated email
 *
 * @param string $email
 *
 * @return string
 */
function twig_fn_email($email)
{
	return HTML::email($email);
}


// -- FILTERS -- //

/**
 * Generate a URL slug
 *
 * @param string $title     The string to slugify
 * @param string $separator The separation characters for words
 *
 * @return string
 */
function twig_flt_slugify($title, $separator = '-')
{
	return Str::slug($title, $separator);
}
