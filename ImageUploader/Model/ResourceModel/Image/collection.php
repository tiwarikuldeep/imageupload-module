<?php 

namespace Test\ImageUploader\Model\ResourceModel\Image;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Test\ImageUploader\Model\Image;
use Test\ImageUploader\Model\ResourceModel\Image as ResourceModelImage;

class Collection extends AbstractCollection {
  protected function _construct()
  {
    $this->_init(Image::class, ResourceModelImage::class);
  }
}