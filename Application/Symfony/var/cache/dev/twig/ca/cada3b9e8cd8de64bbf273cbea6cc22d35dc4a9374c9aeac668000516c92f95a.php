<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d95936679f91b4edda090ed584d54ff0dd902975cebedf23e691ec830907f40b extends Twig_Template
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
        $__internal_e79fb9cdd16ffd0bd15966a4b41ffd1fbc6096b48d3809a2f6892e8b273aeb47 = $this->env->getExtension("native_profiler");
        $__internal_e79fb9cdd16ffd0bd15966a4b41ffd1fbc6096b48d3809a2f6892e8b273aeb47->enter($__internal_e79fb9cdd16ffd0bd15966a4b41ffd1fbc6096b48d3809a2f6892e8b273aeb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e79fb9cdd16ffd0bd15966a4b41ffd1fbc6096b48d3809a2f6892e8b273aeb47->leave($__internal_e79fb9cdd16ffd0bd15966a4b41ffd1fbc6096b48d3809a2f6892e8b273aeb47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
