<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
        
        trait Perl {
            public function perlCoder() {
                return "ich werde lernen Perl<br/>";
            }
        }
        
        trait Susi {
            public function susiCoder() {
                return "ich werde lernen Susi<br/>";
            }
        }
        
        //merge multiple traits
        trait PerlSusi{
            use Perl, Susi;
        }
        
        //access trait
        class CoderOne{
            //use Perl, Susi;
            use PerlSusi;
            
        }
        
        class CoderTwo{
            use Perl;
        }
        
        $c1 = new CoderOne();
        echo $c1->perlCoder();
        echo $c1->susiCoder();
        
//        $c2 = new CoderTwo();
//        echo $c2->perlCoder();

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>