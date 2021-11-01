<?php

namespace App\Services\Soap\BbdAir;

use App\Models\User;

class BbdAirService
{
    /**
     * @return \App\Services\Soap\BbdAir\Types\User
     * @throws \SoapFault
     */
    public function getUser($id)
    {
        try {
            $user = User::findOrFail($id);
            return $user;
        } catch (\Exception $exception) {
            throw new \SoapFault('SoapFault (Service)', $exception->getMessage() ?? 'Something went wrong.');
        }
    }
}
