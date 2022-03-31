 <?php 
	
	include_once('header.php');
	include_once('connect.php');
	include_once('function.php');

if(isset($_REQUEST['ContributionID']))
{
  $contributionid=$_REQUEST['ContributionID'];
  $select=mysqli_query($connection,"SELECT * FROM tbldocumenttitle title, tblcontribution c, tblacademicyear a, tblstudent s
													where title.documenttitleid=c.documenttitleid
													and a.academicyearid=title.academicyearid
													and s.studentid=c.studentid
													and c.connectionid='$contributionid'");
  $data=mysqli_fetch_array($select);
  $confile=$data['file'];

  } 
 
// function createZipAndDownload($files, $filesPath, $zipFileName)
// {
//     // Create instance of ZipArchive. and open the zip folder.
//     $zip = new \ZipArchive();
//     if ($zip->open($zipFileName, \ZipArchive::CREATE) !== TRUE) {
//         exit("cannot open <$zipFileName>\n");
//     }

//     // Adding every attachments files into the ZIP.
//     foreach ($files as $file) {
//         $zip->addFile($filesPath . $file, $file);
//     }
//     $zip->close();

//     // Download the created zip file
//     header("Content-type: application/zip");
//     header("Content-Disposition: attachment; filename = $zipFileName");
//     header("Pragma: no-cache");
//     header("Expires: 0");
//     readfile("$zipFileName");
//     exit;
// }

// // Files which need to be added into zip
//  //$files = array('sql.txt', 'index.php');
// 	$files = array('$confile');

// //$files = array('Document/Con-000007_index.jpg');


// // Directory of files
// $filesPath = 'Download/';
// // Name of creating zip file
// $zipName = 'document.zip';

// echo createZipAndDownload($files, $filesPath, $zipName);
//========================================================


// $zip = new ZipArchive;
// $res = $zip->open('test.zip', ZipArchive::CREATE);
// if ($res === TRUE) {
//     $zip->addFromString('test.txt', 'file content goes here');
//     //$zip->addFile('data.txt', 'entryname.txt');
//     $zip->addFile('$confile');
//     $zip->close();
//     echo 'ok';
// } else {
//     echo 'failed';
// }


////-----------------------------

// $zip_file = 'Download/filename.zip';
// $dir = plugin_dir_path( 'functionality.txt' );
// $zip_file = $dir . '/filename.zip';
// $zip = new ZipArchive();
// if ( $zip->open($zip_file, ZipArchive::CREATE) !== TRUE) {
// exit("message");
// }
// $zip->addFile('Download/', 'downloadfile');

// $download_file = file_get_contents( $file_url );
// $zip->addFromString(basename($file_url),$download_file);
// $zip->close();


  ////////////////---------------

$zip = new ZipArchive;
if ($zip->open('test.zip') === TRUE) {
    $zip->addFile('functionality.txt', 'sql.txt');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>


