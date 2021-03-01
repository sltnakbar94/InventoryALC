<?php
namespace App\Services;

use App\Models\Item;
use App\Models\SubmissionForm;
use App\Models\SubmissionFormDetail;
use GuzzleHttp\Psr7\Request;

/**
 * Handle All Trx on Sales Order
 */
class SubmissionFormServices  {

    public function __construct(
        SubmissionFormDetail $submissionFormDetail,
        SubmissionForm $submissionForm,

        CRUDServices $crudService,
        ItemServices $itemService
    ) {
        $this->submissionFormDetail = $submissionFormDetail;
        $this->submissionForm = $submissionForm;

        $this->crudService = $crudService;
        $this->itemService = $itemService;
    }

    /**
     * Get Detail Sales Order by ID
     *
     * @param int $submission_form_detail_id
     * @return Collection
     */
    public function GetDetailByID($submission_form_detail_id)
    {
        return $this->submissionFormDetail::find($submission_form_detail_id);
    }

    /**
     * Get Detail by Sales Order ID
     *
     * @param array $submission_form_id
     * @return Collection
     */
    public function GetDetailBySubmissionFormID($submission_form_id)
    {
        $data = $this->submissionFormDetail::find($submission_form_id)->get();
        if (!empty($data)) {
            return $data;
        } return null;
    }

    /**
     * Check Item on Sales Order Detail by Sales Order ID & Item ID
     *
     * @param array $params
     * @return Boolean
     */
    public function CheckItemOnSubmissionFormDetail($params)
    {
       return $this->submissionFormDetail::where($params)->first() == null ? true : false;
    }

    /**
     * Get Item On Sales Order Detail by Sales Order ID & Item ID
     *
     * @param array $params
     * @return Boolean
     */
    public function ItemOnSubmissionFormDetail($params)
    {
        return $this->submissionFormDetail::where($params)->first() == null ? true : $this->submissionFormDetail::where($params)->first();
    }

    /**
     * Get Quantity by ID
     *
     * @param int $submission_form_detail_id
     * @return int $qty
     */
    public function GetQTYByID($submission_form_detail_id)
    {
        return $this->submissionFormDetail::find($submission_form_detail_id)->qty;
    }

    public function createSubmissionFormDetail($request)
    {
        dd($request);
    }
}
