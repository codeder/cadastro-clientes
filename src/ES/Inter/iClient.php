<?php

namespace ES\Inter;

interface iClient {

    public function SetAddress($address,$number,$city,$uf);

    public function SetAddressBilling($billing_address,$billing_number,$billing_city,$billing_uf);

    public function getPercent();

    public function setPercent($percent);
}
