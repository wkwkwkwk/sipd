<?php
//kita membuat class dengan nama YiinigoController extends Controller
class YiinigoController extends Controller {

	//..... disinilah tempat kita membuat function
	//function untuk convert mata uang IDR
	public function idrCurency($val) {
		return number_format($val, 0, '', '.');

	}

	/*function untuk create excel
	 *dengan parameter $fileName,
	 *$fileName akan bersifat sensitive case
	 */
	public function createExcel($fileName) {
		/*tentukan mime / format data
		 *dalam hal ini excel
		 *dan akan melakukan force download
		 */
		header("Content-type: application/vnd.ms-excel; charset=utf-8");

		/*manentukan lampiran/file dan nama filenya*/
		header("Content-Disposition: attachment; filename=$fileName.xls");
	}

	/*function untuk create word
	 *dengan parameter $fileName,
	 *$fileName akan bersifat sensitive case
	 */
	public function createWord($fileName) {
		/*tentukan mime / format data
		 *dalam hal ini word
		 *dan akan melakukan force download
		 */
		header("Content-type: application/msword; charset=utf-8");

		/*manentukan lampiran/file dan nama filenya*/
		header("Content-Disposition: attachment; filename=$fileName.doc");
	}

}
?>
