<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_e93a1315b771ca98244a019986bde6c6d7fcbc795a41f20a47454921afb7d450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c33f45a49f1cf3153040d9d6f68d33ef04a3757e7a92c5ba139d2683b11bb2e3 = $this->env->getExtension("native_profiler");
        $__internal_c33f45a49f1cf3153040d9d6f68d33ef04a3757e7a92c5ba139d2683b11bb2e3->enter($__internal_c33f45a49f1cf3153040d9d6f68d33ef04a3757e7a92c5ba139d2683b11bb2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c33f45a49f1cf3153040d9d6f68d33ef04a3757e7a92c5ba139d2683b11bb2e3->leave($__internal_c33f45a49f1cf3153040d9d6f68d33ef04a3757e7a92c5ba139d2683b11bb2e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
