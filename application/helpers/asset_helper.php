<?php
defined('BASEPATH') or exit('No direct script access allowed');


if ( ! function_exists('asset_url()')) {

    /**
     *  Helper that generates all the html tags for all preload content required across the entire
     *   application
     *
     * @return string  HTML TAGS
     */
    function asset_preloader(){

		$stuff = config_item('assets_preloadCDN');
        if (count(config_item('assets_preloadCDN')) <= 0) return false;
        $return_sting = null;

        foreach (config_item('assets_preloadCDN') as $key => $va) {

            list($name, $media_type) = explode(":", $key);
            if (startsWith($va, 'http')) {
                $url = null  ;
            }
            else {
                $url = media_url($media_type);

            }

            switch ($media_type) {
                case 'js':
                    $content =  '<script type="text/javascript" src="' .$url .$va .'"></script>';
                    break;

                case 'css':
                    $content =  '<link rel="stylesheet" href="' .$url .$va .'">';
                    break;

                case 'video':
                    $content =  '<script src="' .$url .$va .'"></script>';
                    break;

                case 'image':
                    $content =  '<script src="' .$url .$va .'"></script>';
                    break;

                default:
                    $content = '<-- typeNotCorrect: ' .$key .' -->';

            }
            $return_sting .= $content;
        }

        return $return_sting;

    }

    /**
     *  Provides a uniform function for implementing asset offloading and CDN caching
     *
     * @return string
     */
    function asset_url() {

        if (config_item('assets_cloudfrontURL') != '')
            {return config_item('assets_assetURL');}

        if (config_item('assets_assetURL') != '') {
        die('test');
            return config_item('assets_assetURL');
        }
        $r = base_url();
        return $r;

    }

    function startsWith($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }


    /**
     * Provides a uniform function to override the asset_url by medium type.
     *
     * Asset hosting and caching can vary based on the medium/type, this function
     * permits the usage of varying urls and folder locations to provide extensible options
     * for hosting and migration of older projects
     *
     * @param string $media_type eg. js, css, video, image
     *
     * @return string eg http://xxxxx
     */
    function media_url($media_type = null) {
        $base = null;

        switch ($media_type) {
            case 'js':
                $base = config_item('assets_jsURL');
                break;

            case 'css':
                $base = config_item('assets_cssURL');
                break;

            case 'video':
                $base = config_item('assets_videoURL');
                break;

            case 'image':
                $base = config_item('assets_imageURL');
                break;

            default:
                return asset_url();
        }
        if ($base == null) {
            return asset_url();
        }
        else {
            return $base;
        }
    }
}

/**
 *  returns a URL for given asset based on the configured asset URL
 *
 * @param string $media_type  (js, css, video, image)
 *
 * @param string $asset_path (relative path and filename)
 *
 * @return string
 */
function site_media(string $media_type, string $asset_path)
{
	// Check if it starts with a /, and remove if needed
	if (substr($asset_path, 0, 1) == '/')
	{
		$asset_path = substr($asset_path, 1);
	}
	return media_url($media_type) .$asset_path;
}

function froala_key(){
    return "CTD5xB1F3F1A1A5A4wc2DBKSPJ1WKTUCQOd1OURPE1KDc1C-7J2A4D4D4C6E2F1F4H1F1==";
}
