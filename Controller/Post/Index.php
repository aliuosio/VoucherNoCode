<?php

namespace AliuOsio\VoucherNoCode\Controller\Post;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Checkout\Model\Session;

class Index extends Action
{

    /**
     * @var Session
     */
    private $session;

    public function __construct(Context $context, Session $session)
    {
        $this->session = $session;
        parent::__construct($context);
    }

    public function execute()
    {
        $this->session->getQuote()
            ->setData('customer_note', $this->hasNotice())
            ->save();
    }

    /**
     * @return bool
     */
    private function hasNotice()
    {
        return $this->getRequest()->getParam('nocode') == 'true';
    }
}
