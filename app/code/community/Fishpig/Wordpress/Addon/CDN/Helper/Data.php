<?php
/**
 *
 *
 *
 *
 */
class Fishpig_Wordpress_Addon_CDN_Helper_Data extends Mage_Core_Helper_Abstract
{
  /*
   * Get the CDN URL set in the config
   *
   * @return string|false
   */
  public function getCDNURL()
  {
    if ($cdnUrl = rtrim(Mage::getStoreConfig('wordpress/integration/cdn_url'), '/')) {
      return $cdnUrl . '/';
    }
    
    return false;
  }
}
