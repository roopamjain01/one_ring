<?php
class RegionsPage extends Page {

	private static $has_many = array (
	    'Regions' => 'Region'
	);

	public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Regions', GridField::create(
            'Regions',
            'Regions on this page',
            $this->Regions(),
            GridFieldConfig_RecordEditor::create()
        ));

        return $fields;
    }
}

class RegionsPage_Controller extends Page_Controller {

     private static $allowed_actions = array (
        'show',
        'getRegions'
    );

    private static $url_handlers = array(
        'show/$Title' => 'show',
    );

    public function show(SS_HTTPRequest $request) {
        $title = $request->param('Title');

        $title = ucwords(str_replace('-', ' ', $title));

        $region = Region::get()->filter('Title', $title)->first();

        if(!$region) {
            return $this->httpError(404,'That region could not be found');
        }

        return array (
            'Region' => $region,
            'Title' => $region->Title
        );
    }

    public function PaginatedRegion($num = 10) {
        return PaginatedList::create(
            $this->Regions(),
            $this->getRequest()
        )->setPageLength($num);
    }
}
