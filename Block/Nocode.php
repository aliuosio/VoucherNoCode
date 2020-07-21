<?php

namespace AliuOsio\VoucherNoCode\Block;

use Magento\Checkout\Model\Session;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Nocode extends Template
{
    /**
     * @var Session
     */
    private $session;

    public function __construct(Session $session, Context $context)
    {
        parent::__construct($context);
        $this->session = $session;
    }

    /**
     * @return string
     */
    public function isChecked()
    {
        return $this->session->getQuote()->getCustomerNote() ? 'checked="checked"' : '';
    }
}
