window.docId = '<?php echo $_SESSION['doc_id'] ?? ""; ?>';
if (window.docId == "") {
    location.href = "./index";
}