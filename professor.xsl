<?xml version="1.0">
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Format">
    <xsl:template match="/">
        <html>
            <body>
                <h2>Registro de Professores</h2>
                    <table border="1">
                            <tr bgcolor="#9acd32">
                            <th align="left">codigo</th>
                            <th align="left">nome</th>
                            <th align="left">endereco</th>
                            <th align="left">telefone</th>
                            </tr>
                        <xsl:for-each select="controle_academico/professor">
                        <xsl:sort select="nome"/>
                            <tr>
                                <td><xsl:value-of select="codigo"/></td>
                                <td><xsl:value-of select="nome"/></td>
                                <td><xsl:value-of select="endereco"/></td>
                                <td><xsl:value-of select="telefone"/></td>
                            </tr>
                        </xsl:for-each>
                    </table>
            </body>
        </html>
    </xsl:template>
    </xsl:stylesheet>
</xsl:sylesheet>