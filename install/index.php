<?

// Для подключения языковых файлов, если глобально
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

class cleanmodule extends CModule
{
	var $MODULE_ID = "cleanmodule";
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
    var $MODULE_GROUP_RIGHTS = "Y";

	public function __construct()
	{
		$arModuleVersion = array();

		include(__DIR__."/version.php");

		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];

		$this->MODULE_NAME = "Мой модуль";
		$this->MODULE_DESCRIPTION = "Описание моего модуля";
	}


	function InstallDB($install_wizard = true)
	{
		RegisterModule("cleanmodule");
		return true;
	}

	function UnInstallDB($arParams = Array())
	{
		UnRegisterModule("cleanmodule");
		return true;
	}

	//Установливаю инфоблок


	function InstallEvents()
	{
		return true;
	}

	function UnInstallEvents()
	{
		return true;
	}

	function InstallFiles()
	{
		return true;
	}

	function UnInstallFiles()
	{
		return true;
	}

	function DoInstall()
	{
		$this->InstallFiles();
		$this->InstallDB(false);
	}

	function DoUninstall()
	{
		$this->UnInstallDB(false);
	}

}
?>