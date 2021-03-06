<?php

namespace EasyTransac\Requests;

use \EasyTransac\Entities\Entity;

/**
 * API function /client/payout/init, make a bank transfer from your account to a customer
 * @author Klyde
 * @copyright EasyTransac
 */
class MakeBankTransfer extends Request
{
    /** @object:BankTransferInfos **/
    protected $response;

    /**
     * Calls the API function
     * @param Entity $entity
     * @return \EasyTransac\Responses\StandardResponse
     */
    public function execute(Entity $entity)
    {
        return $this->call('/client/payout/init', $entity);
    }
}

?>