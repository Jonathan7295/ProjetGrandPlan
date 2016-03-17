<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_bd42a7f6f35859ccf52345737ee2db88e6ec367a1d70bd58024a07d94cf5473b extends Twig_Template
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
        $__internal_92779369d1711b6f310011fffceb597cb7c13cd10208486587092983032fe2e1 = $this->env->getExtension("native_profiler");
        $__internal_92779369d1711b6f310011fffceb597cb7c13cd10208486587092983032fe2e1->enter($__internal_92779369d1711b6f310011fffceb597cb7c13cd10208486587092983032fe2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_92779369d1711b6f310011fffceb597cb7c13cd10208486587092983032fe2e1->leave($__internal_92779369d1711b6f310011fffceb597cb7c13cd10208486587092983032fe2e1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
