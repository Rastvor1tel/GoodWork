<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader,
	\Bitrix\Main\Context;

class IblockFilter extends CBitrixComponent {
	private $filter = [];
	private $propName = "";

	public function setFilter($filter) {
		$this->filter = $filter;
	}

	public function setPropName($propName) {
		$this->propName = $propName;
	}

	private function componentInit() {
		$this->setFilter(["IBLOCK_ID" => $this->arParams["IBLOCK_ID"]]);
		$this->setPropName($this->arParams["PROP_CODE"]);
		return Loader::includeModule("iblock");
	}

	private function getCurrentElement(){
		$result = [];
		$request= Context::getCurrent()->getRequest();
		$result = $request->get("type");
		global $workFilter;
		$workFilter = [
			"PROPERTY_TYPE" => $result
		];
		return $result;
	}

	private function getPropertyData() {
		$result = [];
		$rsProps = CIBlockProperty::GetPropertyEnum($this->propName, ["ID"=>"asc"], $this->filter);
		while ($arProp = $rsProps->Fetch()) {
			$result["ITEMS"][] = [
				"ID" => $arProp["ID"],
				"NAME" => $arProp["VALUE"],
				"CODE" => $arProp["XML_ID"],
				"LINK" => "?type=".$arProp["ID"]
			];
		}
		return $result;
	}

	public function executeComponent() {
		if ($this->componentInit()) {
			if ($this->StartResultCache()) {
				$this->arResult = $this->getPropertyData();
				$this->arResult["CURRENT"] = $this->getCurrentElement();
				$this->includeComponentTemplate();
			}
		}
	}
}