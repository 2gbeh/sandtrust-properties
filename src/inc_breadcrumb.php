    <section class="breadcrumb">
      <table border="0">
        <tr>
          <th>
            <!-- <h1>View Blogs</h1>
            <a href="">Home</a> &#10095;
            <a href="admin-add-blog.html">Add Blog</a> -->

            <h1><?php echo $ctx_caption; ?></h1>
            <?php 
              if (is_array($ctx_snippet)) {
                $buf = '<a href="'.$ctx_trail.'">Home</a> &#10095; ';
                foreach ($ctx_snippet as $e) {
                  $buf .= '<a href="'.$e[1].'">'.$e[0].'</a> &#10095; ';
                }
                echo substr($buf, 0, -10); 
              }
              else
                echo '<p>'.$ctx_snippet.'</p>';
            ?>
          </th>
          <td>
            <input type="button" onclick="window.location.href=''" value="Refresh" />
          </td>
        </tr>
      </table>
    </section>
