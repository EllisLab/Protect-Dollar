<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$plugin_info = array(
						'pi_name'			=> 'Protect Dollar Sign',
						'pi_version'		=> '1.1',
						'pi_author'			=> 'Paul Burdick',
						'pi_author_url'		=> 'http://www.expressionengine.com/',
						'pi_description'	=> 'Protects dollar signs in variables so they can be used in PHP on Output',
						'pi_usage'			=> Protect_dollar::usage()
					);

/**
 * Twitter_timeline Class
 *
 * @package			ExpressionEngine
 * @category		Plugin
 * @author			ExpressionEngine Dev Team
 * @copyright		Copyright (c) 2005 - 2009, EllisLab, Inc.
 * @link			http://expressionengine.com/downloads/details/protect_dollar_sign/
 */


class Protect_dollar {

    var $return_data;    
    
	/**
	 * Constructor
	 *
	 * @access	public
	 * @return	void
	 */
    function Protect_dollar($str = '')
    {
        $this->EE =& get_instance();

		$str = ($str == '') ? $this->EE->TMPL->tagdata : $str;
                       
		$this->return_data = str_replace('$', '&#36;', $str);
	}

	// --------------------------------------------------------------------
	
	/**
	 * Usage
	 *
	 * Plugin Usage
	 *
	 * @access	public
	 * @return	string
	 */

	function usage()
	{
		ob_start(); 
		?>

		To use this plugin, wrap anything you want to be processed by it between these tag pairs:

		{exp:protect_dollar}

		text you want processed

		{/exp:protect_dollar}


		Version 1.1
		******************
		- Updated plugin to be 2.0 compatible


		<?php
		$buffer = ob_get_contents();
	
		ob_end_clean(); 

		return $buffer;
	}

	// --------------------------------------------------------------------

}

// END CLASS

/* End of file pi.protect_dollar.php */
/* Location: ./system/expressionengine/third_party/protect_dollar/pi.protect_dollar.php */