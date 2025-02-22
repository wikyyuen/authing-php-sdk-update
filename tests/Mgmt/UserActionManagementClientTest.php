<?php
include_once '..\config\TestConfig.php';
include_once '..\..\src\Mgmt\UserActionManagementClient.php';
use Authing\Mgmt\ManagementClient;
use Authing\Mgmt\UserActionManagementClient;
use Authing\Types\UDFDataType;
use Authing\Types\UDFTargetType;
use PHPUnit\Framework\TestCase;

class UserActionManagementClientTest extends TestCase
{
    /**
     * @var UserActionManagementClient
     */
    private $userActionManagement;
    private $_testConfig;

    public function setUp(): void
    {
//        $moduleName = str_replace('ClientTest', '', __CLASS__);
//        $manageConfig = (object) TestConfig::getConfig('Management');
//        $this->_testConfig = (object) TestConfig::getConfig($moduleName);
        $management = new ManagementClient('6131967faf2eb55a2b7cebcc', '4c829dbf3a29bcfcb2019017045c714f');
        $management->requestToken();
        $this->userActionManagement = $management->userActions();
    }

   public function testExport()
   {
    //    $data = $this->userActionManagement->expo
   }

   public function testList()
   {
       $data = $this->userActionManagement->list();
       parent::assertNotEmpty($data);
   }
}
