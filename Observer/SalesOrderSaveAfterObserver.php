<?php
namespace Curso\Observers\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class SalesOrderSaveAfterObserver implements ObserverInterface
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
        $order = $observer->getEvent()->getOrder();
        $order_id = $order->getIncrementId();
        $customer_email = $order->getCustomerEmail();
        $this->_logger->info("Curso_Observers ->sales product:". json_encode($order_id));
        $this->_logger->info("Curso_Observers ->sales product:". json_encode($customer_email));
        $this->_logger->info("Curso_Observers ->sales product ----------------------------------------");
        foreach($order->getAllItems() as $item){
            $ProdustIds= $item->getProductId();
            $proName = $item->getName();
            $sku = $item->getSku();
            $type = $item->getProductType();
            if($type=='simple'){
                $this->_logger->info("Curso_Observers ->sales product:". json_encode($type));
                $this->_logger->info("Curso_Observers ->sales product:". json_encode($ProdustIds));
                $this->_logger->info("Curso_Observers ->sales product:". json_encode($proName));
                $this->_logger->info("Curso_Observers ->sales product:". json_encode($sku));
                $this->_logger->info("*************************");
            }
            
        }
        
    }
}
