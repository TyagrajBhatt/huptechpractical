<?php get_header(); ?>

<div id="content" class="narrowcolumn">

<!-- This sets the $curauth variable -->

    <?php
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    $client_id = $curauth->ID;
    ?>

    <div class="main-content">
        <h1><?php echo $curauth->nickname; ?></h1>
        <table style="width:50%;margin: auto;">
            <tbody>
                <tr>
                    <th>First Name</th>
                    <td><?php echo get_user_meta($client_id, 'first_name', true );?></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td><?php echo get_user_meta($client_id, 'last_name', true );?></td>
                </tr>
                <tr>
                    <th>Sub Speciality</th>
                    <td><?php echo get_user_meta($client_id, 'sub_spec', true );?></td>
                </tr>
                <tr>
                    <th>Website URL</th>
                    <td><?php echo get_user_meta($client_id, 'user_web_url', true );?></td>
                </tr>
                <tr>
                    <th>Street Address 1</th>
                    <td><?php echo get_user_meta($client_id, 'billing_address_1', true );?></td>
                </tr>
                <tr>
                    <th>Street Address 2</th>
                    <td><?php echo get_user_meta($client_id, 'billing_address_2', true );?></td>
                </tr>
                 <tr>
                    <th> City</th>
                    <td><?php echo get_user_meta($client_id, 'billing_city', true );?></td>
                </tr>
                <tr>
                    <th> State</th>
                    <td><?php echo get_user_meta($client_id, 'billing_state', true );?></td>
                </tr>
                <tr>
                    <th> Pincode</th>
                    <td><?php echo get_user_meta($client_id, 'billing_postcode', true );?></td>
                </tr>
                <tr>
                    <th> Primary Phone</th>
                    <td><?php echo get_user_meta($client_id, 'billing_phone', true );?></td>
                </tr>
                 <tr>
                    <th> Secondary Phone</th>
                    <td><?php echo get_user_meta($client_id, 'phone_two', true );?></td>
                </tr>
                 <tr>
                    <th>Name of Practice / Business</th>
                    <td><?php echo get_user_meta($client_id, 'billing_company', true );?></td>
                </tr>
                 <tr>
                    <th>Email</th>
                    <td><?php echo $curauth->user_email;?></td>
                </tr>

            </tbody>
        </table>
    </div>
<style type="text/css">
    .main-content {
        max-width: 1166px;
        margin: auto;
    }
    .main-content h1 {
        text-align: center;
        font-size: 40px;
        font-weight: 700;
        text-transform: capitalize;
        margin-bottom: 50px;
    }
</style>
    
</div>

<?php get_footer(); ?>