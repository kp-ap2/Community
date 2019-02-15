<?php
/**
 * Asset Helper
 *
 * A super-simple way to generate tags for including css and js files in CodeIgniter
 *
 * @author  Christian Leo-Pernold mazedlx@gmail.com
 * @link    https://github.com/mazedlx/asset_helper
 * @license http://www.opensource.org/licenses/mit-license
 * @package AssetHelper
 * @version 1.0.1
 */
namespace AssetHelper;
class AssetHelper
{
    public function __construct()
    {
    }
    /**
     * link_css()
     *
     * Creates the link tag for a local CSS file from the assets/css directory
     *
     * @access  public
     * @param   string $filename
     * @param   string $media
     * @return  string
     */
    public function link_css($filename, $media = null)
    {
        if (isset($media)) {
            $media = 'media="'.$media.'"';
        }
        $string = '<link rel="stylesheet" type="text/css" '.$media.' href="assets/css/'.$filename.'">';
        return $string;
    }
    /**
     * link_js
     *
     * Creates the link tag for a local JavaScript File from the assets/js directory
     *
     * @access  public
     * @param   string $filename
     * @param   string $additional
     * @return  string
     */
    public function link_js($filename, $additional = null)
    {
        $string = '<script type="text/javascript" src="assets/js/'.$filename.'" '.$additional.'></script>';
        return $string;
    }
}