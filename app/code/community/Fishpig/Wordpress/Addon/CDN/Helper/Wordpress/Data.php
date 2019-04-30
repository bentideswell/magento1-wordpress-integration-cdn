<?php
/**
 *
 *
 *
 *
 */
class Fishpig_Wordpress_Addon_CDN_Helper_Wordpress_Data extends Fishpig_Wordpress_Helper_Data
{
  /*
   * Get the CDN URL set in the config
   *
   * @return string|false
   */
  public function getFileUploadUrl()
  {
    if ($cdnURL = Mage::helper('wp_addon_cdn')->getCDNURL()) {
      return $cdnURL;
    }
    
    return parent::getFileUploadUrl();
  }
}
