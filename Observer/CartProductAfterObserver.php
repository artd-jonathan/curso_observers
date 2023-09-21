<?php
namespace Curso\Observers\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CartProductAfterObserver implements ObserverInterface
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $_logger;

    public function __construct(
        \Psr\Log\LoggerInterface $logger
    )
    {
        // Observer initialization code...
        // You can use dependency injection to get any class this observer may need.
        $this->_logger = $logger;
    }

    public function execute(Observer $observer)
    {
        // Observer execution code...
        /** @var \Magento\Framework\DataObject $info */
        // $product = $observer->getEvent()->getProduct();
        // $data = array(
        //     'product_id' => $product->getId(), 
        //     'name' =>$product->getName()
        // );
        // $this->_logger->info("Curso_Observers -> product:". json_encode($data));
    }
}
