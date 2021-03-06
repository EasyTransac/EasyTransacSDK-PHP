<?php

namespace EasyTransac\Requests;

use \EasyTransac\Entities\Entity;

/**
 * API function /client/payout/list, find all bank transfers from a customer
 * @author Klyde
 * @copyright EasyTransac
 */
class BankTransfersList extends Request
{
    /** @object:BankTransfersList **/
    protected $response;

    /**
     * Calls the API function
     * @param Entity $entity
     * @return \EasyTransac\Responses\StandardResponse
     */
    public function execute(Entity $entity)
    {
        return $this->call('/client/payout/list', $entity);
    }
}

?>