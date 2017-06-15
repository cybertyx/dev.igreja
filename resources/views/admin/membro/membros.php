/*     * *******************************************************************************************************************
     * MEMBROS DA PIXELSQUARE (FORMULARIO, CADASTRO E RETORNO DE MEMBROS)
     * ****************************************************************************************************************** */

    public function createMembros() {
        $title = "Cadastro de Membros";
        return view('admin.membro.cadmembro', compact('title'));
    }

    public function editarMembro($id, Members $member) {
        $membro = $member->find($id);

        $title = "Editar Membro";
        return view('admin.membro.updmembro', compact('title', 'membro'));
    }

    //FAZER O CADASTRO DE MEMBROS DA PIXELSQUARE
    public function storeMembros(MembroRequest $request, Members $member) {
        $dataForm = $request->all();

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $nameImage = uniqid(date('YmdHis') . time()) . '.' . $image->getClientOriginalExtension();

            $dataForm['image'] = $nameImage;

            $upload = $image->storeAs('imgmembers', $nameImage);

            if (!$upload) {

                return redirect()->back()->with(['errors' => 'Falha no Upload da Imagem.']);
            }
        }

        $insert = $member->create($dataForm);

        if ($insert) {
            return redirect()->route('store.membro')->with('success', "Membro Cadastrado com Sucesso.");
        } else {
            return redirect()->back()->with('errors', "Falha ao Cadastrado Membro.");
        }

        return view('admin.membro.membro');
    }

    //EDITAR MEMBROS DA PIXELSQUARE
    public function updateMembro(MembroRequest $request, $id, Members $member) {

        $membro = $member->find($id);

        $dataForm = $request->all();

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            if ($membro->image == null) {
                $nameImage = $membro->image;
            } else {
                $nameImage = uniqid(date('YmdHis') . time()) . '.' . $image->getClientOriginalExtension();
            }

            $dataForm['image'] = $nameImage;

            $upload = $image->storeAs('imgmembers', $nameImage);

            if (!$upload) {

                return redirect()->back()->with(['errors' => 'Falha no Upload da Imagem.']);
            }
        }

        $update = $membro->update($dataForm);

        if ($update) {
            return redirect()->route('store.membro')->with('success', "Membro Editado com Sucesso.");
        } else {
            return redirect()->back()->with('errors', "Falha ao Editar Membro.");
        }

        return view('admin.membro.cadmembro');
    }

    //RETORNA OS MEMBROS DA PIXELSQUARE
    public function member(Members $member) {
        $title = "Membros do Administrativo Pixelsquare";
        $members = $member->all();

        return view('admin.membro.members', compact('members', 'title'));
    }
