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
        $__internal_9df7b103a463cb2b99c652f0f5e8b19055b94aab3f9222da2a316fa851136a22 = $this->env->getExtension("native_profiler");
        $__internal_9df7b103a463cb2b99c652f0f5e8b19055b94aab3f9222da2a316fa851136a22->enter($__internal_9df7b103a463cb2b99c652f0f5e8b19055b94aab3f9222da2a316fa851136a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9df7b103a463cb2b99c652f0f5e8b19055b94aab3f9222da2a316fa851136a22->leave($__internal_9df7b103a463cb2b99c652f0f5e8b19055b94aab3f9222da2a316fa851136a22_prof);

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
