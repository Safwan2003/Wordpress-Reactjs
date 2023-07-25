<!-- index.php -->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- ... Other head content ... -->
</head>
<body <?php body_class(); ?>>
    <div id="root"></div> <!-- The mount point for your React app -->
    <!-- ... Other body content ... -->

    <!-- Load your React app's JavaScript bundle -->
    <script src="<?php echo get_template_directory_uri(); ?>/react-src/build/static/js/main.8d76fb09.js"></script>
</body>
</html>
