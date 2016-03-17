<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_4bce4b59c4338b0b45046a3eb40daaec3ac96b6919e385c493dc4be6d6d607e7 extends Twig_Template
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
        $__internal_9ab5a2ad3da4b2545a2c46954558e0b6bc0d77f9efc27fb5278cb9216c178940 = $this->env->getExtension("native_profiler");
        $__internal_9ab5a2ad3da4b2545a2c46954558e0b6bc0d77f9efc27fb5278cb9216c178940->enter($__internal_9ab5a2ad3da4b2545a2c46954558e0b6bc0d77f9efc27fb5278cb9216c178940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9ab5a2ad3da4b2545a2c46954558e0b6bc0d77f9efc27fb5278cb9216c178940->leave($__internal_9ab5a2ad3da4b2545a2c46954558e0b6bc0d77f9efc27fb5278cb9216c178940_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
