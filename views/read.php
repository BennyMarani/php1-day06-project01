<!-- IMPORT NAV -->
<?php include('partials/nav.php'); ?>

<!-- MAIN CONTENT -->
<h1 class="text-3xl pb-4 font-bold drop-shadow-lg">Read</h1>



<!-- data tabel -->

<table >
    <thead>
        <tr>
            <th style="border: 1px  solid black">No</th>
            <th style="border: 1px  solid black">Firt Name</th>
            <th style="border: 1px  solid black">Last Name</th>
            <th style="border: 1px  solid black">Email</th>
            <th style="border: 1px  solid black">Phone Number</th>
            <th style="border: 1px  solid black">Address</th>
            <th style="border: 1px  solid black">Action</th>
        </tr>
    </thead>

    <tbody>
       
        <?php foreach($speakers as $speaker): ?>
        
        <tr>
            <td style="border: 1px  solid black"><?php echo $no;?></td>
            <td style="border: 1px  solid black"><?php echo $speaker['0']; ?></td>
            <td style="border: 1px  solid black"><?php echo $speaker['1']; ?></td>
            <td style="border: 1px  solid black"><?php echo $speaker['2']; ?></td>
            <td style="border: 1px  solid black"><?php echo $speaker['3']; ?></td>
            <td style="border: 1px  solid black"><?php echo $speaker['4']; ?></td>
            <td style="border: 1px  solid black">
            <a href="?p=detail">Detail</a>
            <a href="?p=update">Update</a>
            <a href="?p=delete">Delete</a>
            </td>
        </tr>

        <?php $no++;?>
        <?php endforeach?>



    </tbody>


</table>


<!-- end data tanel -->