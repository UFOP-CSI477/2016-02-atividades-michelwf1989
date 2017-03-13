<div class="container well">
    <div class= "col-sm-10 col-sm-offset-1">
    	<h2 align="center">Produtos</h2>
    	<br><br>   
        

        <!-- <table class="table table-striped table-bordered">

            <tr>
                <th class="text-center">Produto</th>
                <th class="text-center">Imagem</th>
                <th class="text-center">Preço</th>
            </tr>

            <?php foreach ($produtos as $p): ?>

            <tr>
                
                <td class="text-center">
                    <?php echo $p['Produto']['nome']; ?>
                </td>

                <td class="text-center">
                    <?php echo $this->Html->image($p['Produto']['imagem'], array('height' => 100));?>
                </td>

                <td class="text-center">
                    <?php echo $p['Produto']['preco']; ?>
                </td>

            </tr>

            <?php endforeach; ?>

        </table> -->

     <!--    <div class="col-sm-3 text-center">
            <div class="panel panel-default">
                <div class="panel-heading"><p><strong><?php echo $p['Produto']['nome'];?></strong></p></div>
                <div class="panel-body"><?php echo $this->Html->image($p['Produto']['imagem'], array('height' => 130));?><br></div>
                <div class="panel-footer"><p>R$<?php echo $p['Produto']['preco'];?></p></div>
            </div>
        </div>

        <div class="col-sm-3 text-center">
          <p><strong><?php echo $p['Produto']['nome'];?></strong></p>
          <?php echo $this->Html->image($p['Produto']['imagem'], array('height' => 130));?><br>
          <p>R$<?php echo $p['Produto']['preco'];?></p>
        </div>     -->
        
        <!-- style="background-color: #222; color: #9d9d9d" -->

        <?php 
            $contProd = 0;
            $divClosed = true;
            foreach ($produtos as $p) {  
                
                if($contProd == 0 || $contProd == 4 || $contProd == 8){ $divClosed = false; ?> <div class="row"> <?php } ?>

                     <div class="col-sm-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-heading" ><p><strong><?php echo $p['Produto']['nome'];?></strong></p></div>
                            <div class="panel-body"><?php echo $this->Html->image($p['Produto']['imagem'], array('height' => 100));?></div>
                            <div class="panel-footer" >
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p>R$<?php echo $p['Produto']['preco'];?></p>
                                    </div>
                                    <div class="col-sm-6">

                                        <?php echo $this->Form->create('Produto', ['url' => ['controller' => 'users', 'action' => 'addCarrinho']]);?>
                                                    
                                            <?php echo $this->Form->input('id', array( 'default' => $p['Produto']['id']));?>
            
                                            <?php echo $this->Form->button('add', array('class' => 'btn  btn-secondary btn-block')); ?>

                                        <?php echo $this->Form->end(); ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php if($contProd == 3 || $contProd == 7 || $contProd == 11){ $divClosed = true; ?> </div> <?php } ?>  
                <?php if($contProd == 3 || $contProd == 7){?> <br><br> <?php } 
            
                $contProd++;
            }
            if($divClosed == false){ ?>  </div> <?php } 
        ?>

           
        <div class="paginas col-sm-6 col-sm-offset-4">
            <div class="pagination pagination-large">
                <ul class="pagination">            

                    <?php echo $this->Paginator->prev('prev', array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                    <?php echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1)); ?>
                    <?php echo $this->Paginator->next('next', array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a')); ?>
            
                </ul>
            </div>        
        </div> 
    </div>
</div>	
