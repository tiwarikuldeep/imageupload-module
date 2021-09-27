<?php 

namespace Test\ImageUploader\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;
use Test\ImageUploader\Api\Data\ImageInterface;
use Test\ageUploader\Model\ResourceModel\Image as ResourceModelImage;

class Image extends AbstractModel implements ImageInterface, IdentityInterface {
  const CACHE_TAG = 'Test\_images';

  public function getIdentities()
  {
    return [
      self::CACHE_TAG . '_' . $this->getId(),
    ];
  }

  protected function _construct () {
    $this->_init(ResourceModelImage::class);
  }

  public function getPath()
  {
    return $this->getData(self::PATH);
  }

  public function setPath($value)
  {
    return $this->setData(self::PATH, $value);
  }
}