
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="email_box">
            <div class="text-center"><h1>Insertion article</h1></div>                        
                    <div class="input_main">
                       <div class="container">
                          <form action="<?php echo base_url("Controller/insererArticle"); ?>" method="post">
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="titre" name="titre">
                            </div>
                            <div class="form-group">
                              <select name="idcategorie" class="form-select" style="max-width:600px;min-width:320px;border-top:none;border-left:none;border-right:none">
                                <option selected="" disabled="true">Selectionnez la categorie</option>
                                <option value="1">News</option>
                                <option value="2">Produit</option>
                                <option value="3">Cours</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <textarea style="margin-top: 20px;width:320px;height:100px" placeholder="Texte" name="texte" id="texte"></textarea>
                            </div>
                            <div class="form-group">
                              <input style="margin-top:-15px" type="date" class="email-bt" placeholder="Date de publication" name="date">
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                          </form>   
                       </div> 
                    </div>
                 </div>
        </div>
        <div class="col-md-8">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Date de publication</th>
                <th scope="col">Categorie</th>
                <th scope="col">Titre</th>
                <th scope="col">Texte</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($articles as $art) { ?>
                <tr>
                <th scope="row"><?php echo $art['id']; ?></th>
                <td><?php echo $art['datedepublication']; ?></td>
                <td><?php echo $art['categorie']; ?></td>
                <td><?php echo $art['titre']; ?></td>
                <td><?php echo $art['texte']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            </table>

        </div>
      </div>
    </div>
  </div>
  <!-- contact section end -->