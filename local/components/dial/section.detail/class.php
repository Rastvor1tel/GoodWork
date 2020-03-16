<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class SectionDetail extends CBitrixComponent {
	private $filter = [];
	private $select = [];

	private function componentInit() {
		$filter = [
			"IBLOCK_ID" => $this->arParams["IBLOCK_ID"]
		];
		if ($this->arParams["SECTION_ID"])
			$filter["ID"] = $this->arParams["SECTION_ID"];
		if ($this->arParams["SECTION_CODE"])
			$filter["SECTION_CODE"] = $this->arParams["SECTION_CODE"];
		$this->setFilter($filter);
		$select = $this->arParams["FIELDS"];
		$select[] = "IBLOCK_ID";
		$select[] = "ID";
		$this->setSelect($this->arParams["FIELDS"]);
		return Loader::includeModule("iblock");
	}

	public function setFilter($filter) {
		$this->filter = $filter;
	}

	public function setSelect($select) {
		$this->select = $select;
	}

	private function getSectionData() {
		$result = [];
		$result = CIBlockSection::GetList([], $this->filter, false, $this->select)->Fetch();
		if ($result["DETAIL_PICTURE"]) {
			$result["DETAIL_PICTURE"] = CFile::GetFileArray($result["DETAIL_PICTURE"]);
		}
		return $result;
	}

	public function executeComponent() {
		if ($this->componentInit()) {
			if ($this->StartResultCache()) {
				$this->arResult = $this->getSectionData();
				global $APPLICATION;
				$APPLICATION->AddChainItem($this->arResult["NAME"]);
				$APPLICATION->SetTitle($this->arResult["NAME"]);
				$this->includeComponentTemplate();
			}
		}
	}}