<?php

namespace sample\Test\Functional\wallets;

/**
 * Class WalletAddressesEndpointTest
 * @package sample\Test\Functional\wallets
 */
class WalletAddressesEndpointTest extends WalletSampleTestCase
{
    public function setUp()
    {
        parent::SetUp();
        self::$walletName = 'alice';
        $className = $this->getClassName();
        $sampleName = substr($className, 0, -4);
        $this->url = self::baseUrl() . basename(__DIR__) . '/' . $sampleName . '.php';
    }

    /**
     * Returns just the classname of the test you are executing. It removes the namespaces.
     * @return string
     */
    public function getClassName()
    {
        return join('', array_slice(explode('\\', get_class($this)), -1));
    }

    public function testWalletAddressesEndpoint()
    {
        $this->loadAndAssertSample($this->url . '?wallet_name=' . self::$walletName);
    }
}