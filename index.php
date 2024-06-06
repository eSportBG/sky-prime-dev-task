<?php require_once('data.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sky Prime | Задание към обява PHP / Backend developer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5dd59d5398.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">

        <div class="box-body">
            <div class="box box-primary">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Филтри за търсене</h3>
                </div>
                <div class="box-body p0">
                    <form method="GET">
                        <div class="row pt-2">
                            <div class="form-group">
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="ekkate">ЕКАТТЕ</label>
                                    <input type="text" name="ekkate" id="ekkate" class="form-control" value="<?= $filter_data['ekkate'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="kind">Вид</label>
                                    <select id="kind" class="form-control" name="kind">
                                        <option <?= $filter_data['kind'] == '' ? 'selected' : '' ?> value="">-- Изберете вид --</option>
                                        <option <?= $filter_data['kind'] == 'с.' ? 'selected' : '' ?> value="с.">с.</option>
                                        <option <?= $filter_data['kind'] == 'гр.' ? 'selected' : '' ?> value="гр.">гр.</option>
                                    </select>
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="settlement_name">Име</label>
                                    <input type="text" name="settlement_name" id="settlement_name" class="form-control" value="<?= $filter_data['settlement_name'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="	transliteration">Транслитерация</label>
                                    <input type="text" name="transliteration" id="	transliteration" class="form-control" value="<?= $filter_data['transliteration'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="district_code">Код на областта</label>
                                    <input type="text" name="district_code" id="district_code" class="form-control" value="<?= $filter_data['district_code'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="area_name">Име на областта</label>
                                    <input type="text" name="area_name" id="area_name" class="form-control" value="<?= $filter_data['area_name'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="municipality_code">Код на общината</label>
                                    <input type="text" name="municipality_code" id="municipality_code" class="form-control" value="<?= $filter_data['municipality_code'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="municipality_name">Име на общината</label>
                                    <input type="text" name="municipality_name" id="municipality_name" class="form-control" value="<?= $filter_data['municipality_name'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="city_hall">Кметство</label>
                                    <input type="text" name="city_hall" id="city_hall" class="form-control" value="<?= $filter_data['city_hall'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="nuts1">NUTS1</label>
                                    <input type="text" name="nuts1" id="nuts1" class="form-control" value="<?= $filter_data['nuts1'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="nuts2">NUTS2</label>
                                    <input type="text" name="nuts2" id="nuts2" class="form-control" value="<?= $filter_data['nuts2'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="nuts3">NUTS3</label>
                                    <input type="text" name="nuts3" id="nuts3" class="form-control" value="<?= $filter_data['nuts3'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="	type_code">Код на типа</label>
                                    <input type="text" name="type_code" id="	type_code" class="form-control" maxlength="3" value="<?= $filter_data['type_code'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="category_code">Код на категорията</label>
                                    <input type="text" name="category_code" id="category_code" class="form-control" maxlength="3" value="<?= $filter_data['category_code'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="altitude">Надморска височина</label>
                                    <select id="altitude" class="form-control" name="altitude">
                                        <option <?= $filter_data['altitude'] == '' ? 'selected' : '' ?> value="">-- Изберете надморска височина --</option>
                                        <?php foreach ($altitude as $key => $altitude_value) { ?>
                                            <option <?= $filter_data['altitude'] == $key ? 'selected' : '' ?> value="<?= $key ?>"><?= $altitude_value ?></option>
                                        <?php } ?>
                                    </select>

                                </div>
                                <div class="col-xs-12 col-md-3 col-lg-2 mb-2">
                                    <label for="document_code">Код на документа</label>
                                    <input type="text" name="document_code" id="document_code" class="form-control" value="<?= $filter_data['document_code'] ?>">
                                </div>
                                <div class="col-xs-12 col-md-4 col-lg-3 mb-2">
                                    <span class="hidden-xs" style="margin-bottom: 5px;display: inline-block">&nbsp;</span>
                                    <div>
                                        <button id="search_button" type="submit" class="btn btn-success mb-1" style="background: #407898 !important;border-color: #435c6b !important;">
                                            <i class="fa fa-search" aria-hidden="true"></i> Търсене
                                        </button>
                                        <a href="/sky-prime-dev/" class="btn btn-dark mb-1"> (X) Нулирай търсенето </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <table class="table">
                    <thead class="thead-custom">
                        <tr>
                        <th scope="col">№</th>
                        <th scope="col">ЕКАТТЕ</th>
                        <th scope="col">Вид</th>
                        <th scope="col">Име на населено място</th>
                        <th scope="col">Транслитерация</th>
                        <th scope="col">Код на областта</th>
                        <th scope="col">Име на областта</th>
                        <th scope="col">Код на общината</th>
                        <th scope="col">Име на общината</th>
                        <th scope="col">Кметство</th>
                        <th scope="col">NUTS1</th>
                        <th scope="col">NUTS2</th>
                        <th scope="col">NUTS3</th>
                        <th scope="col">Код на типа</th>
                        <th scope="col">Код на категорията</th>
                        <th scope="col">Надморска височина</th>
                        <th scope="col">Надморска височина стойност</th>
                        <th scope="col">Код на документа</th>
                        </tr>
                    </thead>
                    <tbody>
        <?php
            if(!isset($data) || $data == ''){
                echo '
                    <div class="alert alert-warning" role="alert">
                    Няма записи за показване.
                    </div>
                ';
            } else{

                foreach ($data as $row) {
        ?>
                    <tr>
                        <th scope="row"><?= $row['sequence_number'] ?></th>
                        <td><?= $row['ekkate'] ?></td>
                        <td><?= $row['kind'] ?></td>
                        <td><?= $row['settlement_name'] ?></td>
                        <td><?= $row['transliteration'] ?></td>
                        <td><?= $row['district_code'] ?></td>
                        <td><?= $row['area_name'] ?></td>
                        <td><?= $row['municipality_code'] ?></td>
                        <td><?= $row['municipality_name'] ?></td>
                        <td><?= $row['city_hall'] ?></td>
                        <td><?= $row['nuts1'] ?></td>
                        <td><?= $row['nuts2'] ?></td>
                        <td><?= $row['nuts3'] ?></td>
                        <td><?= $row['type_code'] ?></td>
                        <td><?= $row['category_code'] ?></td>
                        <td><?= $row['altitude'] ?></td>
                        <td><?= $row['altitude_value'] ?></td>
                        <td><?= $row['document_code'] ?></td>
                    </tr>
        <?php
                }
            }
        ?>

                    </tbody>
                </table>

                <nav aria-label="Странициране: ">
                <?php if ($number_of_pages > 0): ?>
                    <ul class="pagination">
                        <?php if ($page > 1): ?>
                        <li class="page-item"><a class="page-link" href="index.php?<?= $filtered_string ?>&page=<?= $page-1 ?>">Предишна</a></li>
                        <?php endif; ?>

                        <?php if ($page > 3): ?>
                        <li class="page-item"><a class="page-link" href="index.php?<?= $filtered_string ?>&page=1">1</a></li>
                        <li class="page-item"><a class="page-link">...</a></li>
                        <?php endif; ?>

                        <?php if ($page-2 > 0): ?><li class="page-item"><a class="page-link" href="index.php?<?= $filtered_string ?>&page=<?= $page-2 ?>"><?= $page-2 ?></a></li><?php endif; ?>
                        <?php if ($page-1 > 0): ?><li class="page-item"><a class="page-link" href="index.php?<?= $filtered_string ?>&page=<?= $page-1 ?>"><?=$page-1 ?></a></li><?php endif; ?>

                        <li class="page-item active"><a class="page-link" href="index.php?<?= $filtered_string ?>&page=<?= $page ?>"><?= $page ?></a></li>

                        <?php if ($page+1 < $number_of_pages+1): ?><li class="page-item"><a class="page-link" href="index.php?<?= $filtered_string ?>&page=<?= $page+1 ?>"><?= $page+1 ?></a></li><?php endif; ?>
                        <?php if ($page+2 < $number_of_pages+1): ?><li class="page-item"><a class="page-link" href="index.php?<?= $filtered_string ?>&page=<?= $page+2 ?>"><?= $page+2 ?></a></li><?php endif; ?>

                        <?php if ($page < $number_of_pages-2): ?>
                        <li class="page-item"><a class="page-link">...</a></li>
                        <li class="page-item"><a class="page-link" href="index.php?<?= $filtered_string ?>&page=<?= $number_of_pages ?>"><?= $number_of_pages ?></a></li>
                        <?php endif; ?>

                        <?php if ($page < $number_of_pages): ?>
                        <li class="page-item"><a class="page-link" href="index.php?<?= $filtered_string ?>&page=<?= $page+1 ?>">Следваща</a></li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
                </nav>

                <div class="clearfix"></div>
                <br>

            </div>
        </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>