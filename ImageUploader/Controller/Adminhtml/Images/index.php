<?php 

namespace Test\ImageUploader\Controller\Adminhtml\Images;

class Index extends \Magento\Backend\App\Action {

  /**
   *
   * @var \Magento\Framework\View\Result\PageFactory
   */
  protected $resultPageFactory;

  public function __construct(
    \Magento\Backend\App\Action\Context $context,
    \Magento\Framework\View\Result\PageFactory $resultPageFactory
  )
  {
    parent::__construct($context);
    $this->resultPageFactory = $resultPageFactory;
  }

  public function execute()
  {
    /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
    $resultPage = $this->resultPageFactory->create();
    $resultPage->setActiveMenu('Test_ImageUploader::images_uploader');
    $resultPage->getConfig()->getTitle()->prepend(__('Images'));
    return $resultPage;
  }
}