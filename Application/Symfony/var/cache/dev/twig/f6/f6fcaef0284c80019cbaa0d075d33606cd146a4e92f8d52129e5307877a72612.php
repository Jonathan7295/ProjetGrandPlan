<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_203b50f16283be83af071bb534dee730cc7a1f85001c3b78231d8fe2f81ee73b extends Twig_Template
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
        $__internal_04c508e9cc64b32fcf549d9813a4feb063a6e65c200eb6991e911db229e2ca58 = $this->env->getExtension("native_profiler");
        $__internal_04c508e9cc64b32fcf549d9813a4feb063a6e65c200eb6991e911db229e2ca58->enter($__internal_04c508e9cc64b32fcf549d9813a4feb063a6e65c200eb6991e911db229e2ca58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_04c508e9cc64b32fcf549d9813a4feb063a6e65c200eb6991e911db229e2ca58->leave($__internal_04c508e9cc64b32fcf549d9813a4feb063a6e65c200eb6991e911db229e2ca58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
