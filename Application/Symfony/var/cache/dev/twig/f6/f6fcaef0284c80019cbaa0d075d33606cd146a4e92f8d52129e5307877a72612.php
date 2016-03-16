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
        $__internal_0275e4b7f1132bc1ef0f1a7869a7f3f5407ea2634f85df337c059370653cf3f6 = $this->env->getExtension("native_profiler");
        $__internal_0275e4b7f1132bc1ef0f1a7869a7f3f5407ea2634f85df337c059370653cf3f6->enter($__internal_0275e4b7f1132bc1ef0f1a7869a7f3f5407ea2634f85df337c059370653cf3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0275e4b7f1132bc1ef0f1a7869a7f3f5407ea2634f85df337c059370653cf3f6->leave($__internal_0275e4b7f1132bc1ef0f1a7869a7f3f5407ea2634f85df337c059370653cf3f6_prof);

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
